<?php
class Album {

    private $con;
    private $id;
    private $title;
    private $genre;
    private $artworkPath;
    private $artistId;


    public function __construct($con, $id)
    {
        $this->con = $con;
        $this->id = $id;

        $query = mysqli_query($this->con, "SELECT * FROM albums WHERE id='$this->id'");
        $album = mysqli_fetch_array($query);

        $this->title = $album['title'];
        $this->genre = $album['genre'];
        $this->artworkPath = $album['artwork_path'];
        $this->artistId = $album['artist'];
    }

    public function getTitle() {
        return $this->title;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function getArtworkPath() {
        return $this->artworkPath;
    }

    public function getArtist() {
        return new Artist($this->con, $this->artistId);
    }
}
?>