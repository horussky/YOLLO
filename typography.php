<?php 
ob_start("ob_gzhandler"); 
include 'includes/functions.inc.php';
include 'includes/meta.config.inc.php';

?>
<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<title><?php echo $metas['about']['title']; ?></title>

<meta name="description" content="<?php echo $metas['about']['desc']; ?>" />
<meta name="keywords" content="<?php echo $metas['about']['keywords']; ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="aOAfb-SvmTm_gQdN1mBdu4VN7r6JudKkeJ93Y2B8SLE" />
<link href="<?php echo $metas['about']['canonical']; ?>" rel="canonical" />
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<link href="css/global.css?r=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
<meta property="fb:pages" content="117420764961518" />

</head> 

<body>

<div id="wrap">
    
	<!--Mobile Nav-->
	<?php include 'includes/mobile.nav.inc.php'; ?>
	<!--Mobile Nav-->   


        <div class="container">
    	    <div class="row">
                <div class="col">
                    <?php include 'includes/header.inc.php'; ?>
                </div>
            </div><!-- end of row-->
        </div><!-- end of container --> 

        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <h1>Heading 1</h1>
                    <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et.</p>

                    <h2>Heading 2</h2>
                    <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et.</p>

                    <h3>Heading 3</h3>
                    <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et.</p>

                    <h4>Heading 4</h4>
                    <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et.</p>

                    <h5>Heading 5</h5>
                    <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et.</p>

                    <h6>Heading 6</h6>
                    <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et.</p>
                    </div>
                </div>
            </div>
        </div><!--container-fluid -->


		<div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <table>
                        <thead>
                            <tr>
                            <th>Heading</th>
                            <th>Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>
                                <p><code class="highlighter-rouge">&lt;h1&gt;&lt;/h1&gt;</code></p>

                            </td>
                            <td><span class="h1">h1. Bootstrap heading</span></td>
                            </tr>
                            <tr>
                            <td>
                                <p><code class="highlighter-rouge">&lt;h2&gt;&lt;/h2&gt;</code></p>

                            </td>
                            <td><span class="h2">h2. Bootstrap heading</span></td>
                            </tr>
                            <tr>
                            <td>
                                <p><code class="highlighter-rouge">&lt;h3&gt;&lt;/h3&gt;</code></p>

                            </td>
                            <td><span class="h3">h3. Bootstrap heading</span></td>
                            </tr>
                            <tr>
                            <td>
                                <p><code class="highlighter-rouge">&lt;h4&gt;&lt;/h4&gt;</code></p>

                            </td>
                            <td><span class="h4">h4. Bootstrap heading</span></td>
                            </tr>
                            <tr>
                            <td>
                                <p><code class="highlighter-rouge">&lt;h5&gt;&lt;/h5&gt;</code></p>

                            </td>
                            <td><span class="h5">h5. Bootstrap heading</span></td>
                            </tr>
                            <tr>
                            <td>
                                <p><code class="highlighter-rouge">&lt;h6&gt;&lt;/h6&gt;</code></p>

                            </td>
                            <td><span class="h6">h6. Bootstrap heading</span></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--container-fluid -->
		

</div><!-- end of wrap -->



<!-- Footer  -->
<?php include 'includes/footer.inc.php'; ?>
<!-- End of Footer  -->

<?php include 'includes/scripts.inc.php'; ?>

<?php include 'includes/analytics.inc.php'; ?>
<!--End of google analytics-->



</body></html>