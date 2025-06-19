<?php
    date_default_timezone_set('America/Chicago');

    class Event {
        public $title;
        public $location;
        public $date;
        public $start;
        public $end;
        public $img;
        public $link;
        public $desc;
        
        public function __construct($title, $location, $date, $start, $end, $img, $link, $desc) {
            $this->title = $title;
            $this->location = $location;
            $this->date = $date;
            $this->start = $start;
            $this->end = $end;
            $this->img = $img;
            $this->link = $link;
            $this->desc = $desc;
        }
    }

    $feature_event = [
        new Event(
            "Cincinnati Music Festival", //title
            "Cincinnati, OH", //location
            "July 24-26, 2025", //date
            strtotime("July 24, 2025"), //start
            strtotime("July 26, 2025"), //end
            "images/slides/splash-mmf.jpg", //img
            "/nati-music-festival", //link
            "Book now for an all-inclusive Cincinnati Music Festival travel package to experience renowned performers and Grown and Sophisticated Mid-Day Cruise." //desc
        ),
        new Event(
            "Daytopia", //title
            "Montgomery, AL", //location
            "June 28, 2025", //date
            strtotime("June 28, 2025"), //start
            strtotime("June 28, 2025"), //end
            "images/slides/splash-daytopia.jpg", //img
            "/daytopia", //link
            "Experience the ultimate bowling party at YOLLO's Daytopia in Gumptown! Enjoy bowling with food, drinks, and music. Secure your spot now!" //desc
        ),
        new Event(
            "Grown & Sophisticated Mid-Day Cruise",
            "Cincinnati, OH",
            "July 25, 2025",
            strtotime("July 25, 2025"),
            strtotime("July 25, 2025"),
            "images/slides/splash-gsc.jpg",
            "/nati-music-festival",
            "Book now for an all-inclusive Cincinnati Music Festival travel package to experience renowned performers and Grown and Sophisticated Mid-Day Cruise."
        ),
        new Event(
            "Essence Festival",
            "New Orleans, LA",
            "July 4-6, 2025",
            strtotime("July 4, 2025"),
            strtotime("July 6, 2025"),
            "images/slides/splash-essence.jpg",
            "/essence-festival",
            "Book now for an all-inclusive Essence Festival travel package to experience renowned performers and celebrities."
        ),
        new Event(
            "Magic City Classic",
            "Birmingham, AL",
            "October 24-26, 2025",
            strtotime("October 24, 2025"),
            strtotime("October 26, 2025"),
            "images/slides/splash-mcc.jpg",
            "/classic",
            "Get ready for the Magic City Classicccccc! This is the biggest HBCU football showdown in the nation! Are you a Dawg or a Hornet?  Book with us and find out!"
        ),
        new Event(
            "NBA All-Star Weekend",
            "Los Angeles, CA",
            "February 13-15, 2026",
            strtotime("February 13, 20265"),
            strtotime("February 15, 2026"),
            "images/slides/splash-nba.jpg",
            "/nba-allstar",
            "Lets turn up at the All-Star Game with YOLLO's exclusive package, featuring A-list parties, and all-inclusive perks!"
        ),
        new Event(
            "Party Gras Cruise",
            "Montgomery, AL",
            "August 16-18, 2024",
            strtotime("August 16, 2024"),
            strtotime("August 18, 2024"),
            "images/slides/splash-partygras.jpg",
            "/partygras",
            "Party Gras: Bottles and Beads is a weekend event featuring good music, adult beverages, mingling, and fun for all attendees."
        ),
        new Event(
            "Urban Ski Weekend",
            "Gatlinburg, TN",
            "Feb 6 - Feb 9, 2026",
            strtotime("February 6, 2026"),
            strtotime("February 9, 2026"),
            "images/slides/splash-urban-ski.jpg",
            "/urban-ski-weekend",
            "Join YOLLO for an unforgettable Urban Ski Weekend in Gatlinburg, Tennessee, with tailored skiing experiences for all skill levels."
        ),
        new Event(
            "HBCU Alumni Getaway Cruise",
            "Costa Maya, Belize, & Cozumela",
            "December 14-20, 2025",
            strtotime("December 14, 2025"),
            strtotime("December 20, 2025"),
            "images/slides/splash-alumni.jpg",
            "/alumni-getaway-cruise",
            "HBCU alums, join YOLLO for a cruise to Costa Maya, Belize, & Cozumela!"
        ),
        new Event(
            "London To Paris",
            "Paris, France",
            "December 31 - Jan 5, 2023",
            strtotime("December 31, 2023"),
            strtotime("January 5, 2023"),
            "images/featured-events/featured-event-london.jpg",
            "/london-to-paris",
            ""
        ),
        new Event(
            "Dubai Takeover",
            "Dubai",
            "August 31 - Sept 5, 2023",
            strtotime("August 31, 2023"),
            strtotime("September 5, 2023"),
            "images/featured-events/featured-event-dubai.jpg",
            "/dubai-takeover",
            ""
        ),
        new Event(
            "Egypt Takeover",
            "Egypt",
            "November 1-6, 2023",
            strtotime("November 1, 2023"),
            strtotime("November 6, 2023"),
            "images/featured-events/featured-event-egypt.jpg",
            "/egypt-takeover",
            ""
        ),
        new Event(
            "Greece Takeover",
            "Greece",
            "October 5-11, 2023",
            strtotime("October 5, 2023"),
            strtotime("October 11, 2023"),
            "images/featured-events/featured-event-greece.jpg",
            "/greece-takeover",
            ""
        ),
        new Event(
            "Italy Takeover",
            "Italy",
            "October 31 - November 5, 2023",
            strtotime("October 31, 2023"),
            strtotime("November 5, 2023"),
            "images/featured-events/featured-event-italy.jpg",
            "/italy-takeover",
            ""
        ),
        new Event(
            "Fade To May",
            "Memphis, TN",
            "May 5-7, 2023",
            strtotime("May 5, 2023"),
            strtotime("May 7, 2023"),
            "images/featured-events/featured-event-may.jpg",
            "/fade-to-may",
            ""
        ),
        new Event(
            "CIAA Tourney Weekend",
            "Baltimore, MD",
            "March 1-3, 2024",
            strtotime("March 1, 2024"),
            strtotime("March 3, 2024"),
            "images/slides/splash-tourney.jpg",
            "/ciaa",
            "The CIAA tournament held in Baltimore is one of the most attended events among HBCUs in the nation."
        ),
        new Event(
            "Shamrock Sea Escape",
            "Cozumel, Mexico",
            "March 16-21, 2025",
            strtotime("March 16, 2026"),
            strtotime("March 21, 2026"),
            "images/slides/splash-shamrock.jpg",
            "/shamrock-sea-escape",
            "Celebrate St. Patrick's Day with YOLLO's all-inclusive cruise event! Enjoy great vibes and incredible entertainment!"
        ),
        new Event(
            "Urban Fiesta Weekend",
            "Montego Bay, Jamaica",
            "May 22-24, 2026",
            strtotime("May 22, 2026"),
            strtotime("May 24, 2026"),
            "images/slides/splash-urban-fiesta.jpg",
            "/urban",
            "Explore Jamaica with YOLLO Group Services! Book your Urban Fiesta adventure now for a memorable Caribbean experience."
        )
    ];

    usort($feature_event, function($a, $b) {
        return $a->end - $b->end;
    });
?>
