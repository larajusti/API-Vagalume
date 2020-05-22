<?php
ini_set('display_errors', 'on');

if (isset($_POST['search'])) {
    $search = $_POST['search'];

    $artist = getArtist($search);
    $artistName = $artist->response->docs[0]->band;

    $artistId = getArtistId($artist);

    $artistImages = getImages($artistId);
    $image = $artistImages->images[0]->url;
}
else {
    $artistName = '';
}

function getArtistId($artist)
{
    return substr($artist->response->docs[0]->id, 1);
}

function getArtist(string $search)
{
    $url = "https://api.vagalume.com.br/search.art?apikey=660a4395f992ff67786584e238f501aa&q={$search}&limit=5";

    return json_decode(file_get_contents($url));
};

function getImages(string $artistId)
{
    $url = "https://api.vagalume.com.br/image.php?bandID={$artistId}&limit=5";

    return json_decode(file_get_contents($url));
};
