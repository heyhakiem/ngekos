<?php

namespace App\Interfaces;

interface BoardingHouseRepositoryInterface
{
    public function getAllBoardingHouses($search = null, $city = null, $category = null);

    public function getPopularBoardingHouses($limit = 5);

    public function getBoardingHousebyCitySlug($slug);

    public function getBoardingHousebyCategorySlug($slug);

    public function getBoardingHousebySlug($slug);
}