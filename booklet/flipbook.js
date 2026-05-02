document.addEventListener("DOMContentLoaded", () => {
  // ---------- CONFIG ----------
  const TOTAL_PAGES = 16;
  const IMAGE_PATH = "pages";
  const EXT = ".jpg";
  const PAGE_WIDTH = 1725;
  const PAGE_HEIGHT = 2625;
  const MAX_ZOOM = 3;
  const MIN_ZOOM = 0.4;
  const SWIPE_THRESHOLD = 60;

  // DOM refs
  const wrapper = document.getElementById("flipbook-wrapper");
  const bookEl = document.getElementById("flipbook");
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");
  const zoomInBtn = document.getElementById("zoomIn");
  const zoomOutBtn = document.getElementById("zoomOut");
  const fitBtn = document.getElementById("fitPage");
  const fullScreenBtn = document.getElementById("fullScreen");
  const toolbar = document.getElementById("controls");

  if (!bookEl || !wrapper) {
    console.error("Missing #flipbook or #flipbook-wrapper");
    return;
  }

  const pages = Array.from({ length: TOTAL_PAGES }, (_, i) => `${IMAGE_PATH}/${i + 1}${EXT}`);

  const pageFlip = new St.PageFlip(bookEl, {
    width: PAGE_WIDTH,
    height: PAGE_HEIGHT,
    size: "fixed",
    autoSize: false,
    showCover: false,
    useMouseEvents: true,
    drawShadow: true,
    flippingTime: 600,
    clickEventForward: false,
    clickEventBackward: false,
    mobileScrollSupport: false
  });

  // ---------- Preload images before loading ----------
  Promise.all(pages.map(src => {
    return new Promise(resolve => {
      const img = new Image();
      img.onload = resolve;
      img.onerror = resolve;
      img.src = src;
    });
  })).then(() => {
    pageFlip.loadFromImages(pages);
  });

  // ---------- Page tracking ----------
  pageFlip.on("flip", (e) => {
    const pageIdx = typeof e.data === "number" ? e.data + 1 : 1;
    window._currentPage = pageIdx; // expose for debugging
    showToolbar();
  });

  // ---------- Zoom and Resize ----------
  let zoomLevel = 1;
  function resizeBook() {
    const vw = wrapper.clientWidth;
    const vh = wrapper.clientHeight;
    const scale = Math.min(vw / PAGE_WIDTH, vh / PAGE_HEIGHT) || 1;
    bookEl.style.transform = `translateZ(0) scale(${scale * zoomLevel})`;
    bookEl.style.transformOrigin = "center center";
  }

  let resizeScheduled = false;
  window.addEventListener("resize", () => {
    if (!resizeScheduled) {
      resizeScheduled = true;
      requestAnimationFrame(() => {
        resizeBook();
        resizeScheduled = false;
      });
    }
  });

  setTimeout(resizeBook, 80);

  // ---------- Event Listeners ----------
  function setupEventListeners() {
    nextBtn?.addEventListener("click", () => pageFlip.flipNext());
    prevBtn?.addEventListener("click", () => pageFlip.flipPrev());

    zoomInBtn?.addEventListener("click", () => {
      zoomLevel = Math.min(MAX_ZOOM, zoomLevel * 1.15);
      resizeBook();
    });

    zoomOutBtn?.addEventListener("click", () => {
      zoomLevel = Math.max(MIN_ZOOM, zoomLevel / 1.15);
      resizeBook();
    });

    fitBtn?.addEventListener("click", () => {
      zoomLevel = 1;
      resizeBook();
    });

    fullScreenBtn?.addEventListener("click", async () => {
      if (!document.fullscreenElement) {
        await document.documentElement.requestFullscreen().catch(() => {});
      } else {
        await document.exitFullscreen().catch(() => {});
      }
    });

    document.addEventListener("keydown", (e) => {
      if (e.key === "ArrowRight") pageFlip.flipNext();
      if (e.key === "ArrowLeft") pageFlip.flipPrev();
      if (e.key === "+") zoomInBtn?.click();
      if (e.key === "-") zoomOutBtn?.click();
    });

    bookEl.addEventListener("wheel", (e) => {
      if (Math.abs(e.deltaY) < 10) return;
      e.deltaY > 0 ? pageFlip.flipNext() : pageFlip.flipPrev();
    }, { passive: true });
  }

  setupEventListeners();

  // ---------- Touch Handling ----------
  let startX = 0, startY = 0, isSwiping = false, touchHandled = false;

  bookEl.addEventListener("touchstart", (ev) => {
    if (ev.touches.length !== 1) return;
    isSwiping = true;
    startX = ev.touches[0].clientX;
    startY = ev.touches[0].clientY;
  }, { passive: true });

  bookEl.addEventListener("touchend", (ev) => {
    if (!ev.changedTouches?.length) return;
    ev.preventDefault();
    ev.stopImmediatePropagation();

    const dx = startX - ev.changedTouches[0].clientX;
    const dy = startY - ev.changedTouches[0].clientY;
    const horizontal = Math.abs(dx) > Math.abs(dy);

    if (isSwiping && horizontal && Math.abs(dx) > SWIPE_THRESHOLD) {
      touchHandled = true;
      dx > 0 ? pageFlip.flipNext() : pageFlip.flipPrev();
      setTimeout(() => { touchHandled = false; }, 300);
      isSwiping = false;
      return;
    }

    const x = ev.changedTouches[0].clientX;
    const w = window.innerWidth;
    if (x < w * 0.33) {
      touchHandled = true;
      pageFlip.flipPrev();
    } else if (x > w * 0.66) {
      touchHandled = true;
      pageFlip.flipNext();
    }
    setTimeout(() => { touchHandled = false; }, 300);
    isSwiping = false;
  }, { passive: false });

  bookEl.addEventListener("click", (e) => {
    if (touchHandled) {
      e.preventDefault();
      e.stopImmediatePropagation();
    }
  }, true);

  // ---------- Toolbar Auto-Hide ----------
  let hideTimer;
  function showToolbar() {
    toolbar?.classList.remove("hidden");
    clearTimeout(hideTimer);
    hideTimer = setTimeout(() => {
      toolbar?.classList.add("hidden");
    }, 2000);
  }

  function attachToolbarActivity() {
    const events = ["mousemove", "mousedown", "touchstart", "touchmove", "click"];
    events.forEach(evt => document.addEventListener(evt, showToolbar, { passive: true }));
  }

  setTimeout(() => {
    showToolbar();
    attachToolbarActivity();
  }, 500);

  // ---------- Debugging Hooks ----------
  window._pageFlip = pageFlip;
  window._resizeFlipbook = resizeBook;
});
