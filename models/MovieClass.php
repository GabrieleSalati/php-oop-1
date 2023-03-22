<?php

class Movie
{
    public $title;
    public $genre;
    public $year;
    public $director;

    function __construct(
        string $_title,
        string $_genre,
        int $_year,
        string $_director
    ) {
        $this->title = $_title;
        $this->defaultGenre($_genre);
        $this->year = $_year;
        $this->director = $_director;
    }

    public function defaultGenre($_genre)
    {
        if (!is_string($_genre) || $_genre === '') {
            $this->genre = 'unknown';
        } else {
            $this->genre = $_genre;
        }
    }
}
