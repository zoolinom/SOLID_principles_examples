<?php

/*
* Derived classes must be substitutable for their base calsses
*
* Any implementation of an abstraction or an interface should be substitutable anywhere an abstraction is accepted
*/

class A {
    public function fire() {}
}

class B extends A {
    public function fire() {}
}

/*
* Principle say if this function accept A than we should we also be able to swap in or substitute B and everything should work perfectly
*/
function doSomething(A $obj)
{
    // do something with it
}



// Another example
class VideoPlayer {
    public function play($file)
    {
        // play the video
    }
}

class AviVideoPlayer extends VideoPlayer {

    /*
    * This violates the LSP
    * One of the rules are that the precondition for this subclass can't be greater
    * We cannot substitute anywhere else because the output could potentialy be different
    */
    public function play($file)
    {
        if (pathinfo($file, PATHINFO_EXTENSION) !== 'avi')
        {
            throw new Exception; // violates the LSP
        }
    }
}



// Another example
interface LessonRepositoryInterface {
    /**
     * Fetch all records
     *
     * @return array
     */
    public function getAll();
}

class FileLessonRepository implements LessonRepositoryInterface {
    public function getAll()
    {
        // return through filesystem
        return [];
    }
}

/*
* In first case getAll returns an array in second collection
*/
class DbLessonRepository implements LessonRepositoryInterface {
    public function getAll()
    {
        // eloquent
        return Lesson::all(); // violates the LSP
        /*
        * return Lesson::all()->toArray()
        * This does not violates the LSP because it also returns an array
        */
    }
}

function foo(FileLessonRepository $lesson)
{
    $lessons = $lesson->getAll();

    /*
    * With this we need to have
    * if (is_a()) but as we see in Open-Closed principle this is not ok
    * Output needs to match what is specified in contract (interface)
    */
}
