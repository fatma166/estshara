<?php 
namespace App\Repositories;
use App\Models\Intro;
use App\Interfaces\IntroInterface;
use App\Http\Resources\IntroCollection;

class IntroRepository implements IntroInterface{


    public function getIntro():IntroCollection {
       $result=Intro::all();
        if ($result === null) {
            throw new InvalidArgumentException("Invalid id.");
        }

        return IntroCollection::toArray($result);
    }


}