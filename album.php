<?php include("includes/header.php");
    if(isset($_GET['id'])) {
        $albumId = $_GET['id'];
    } else {
        header("Location: index.php");
    }

    $album = new Album($con, $albumId);

    $artist = $album->getArtist();
?>

<div class="entityInfo">
    <div class="leftSection">
        <img src="<?php echo $album->getArtworkPath(); ?>">
    </div>
    
    <div class="rightSection">
        <h2><?php echo $album->getTitle(); ?></h2>
        <p>By <?php echo $album->getArtist()->getName(); ?></p>
        <p><?php echo $album->getNumberOfSongs(); ?></p>
    </div>
</div>

<?php include("includes/footer.php"); ?>