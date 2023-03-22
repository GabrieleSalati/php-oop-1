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
        $this->title = $_genre;
        $this->title = $_year;
        $this->title = $_director;
    }
}
