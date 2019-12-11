<?php

interface ManageableInterface
{
    public function beManaged();
}

// interface WorkerInterface
// {
//     public function work();

//     public function sleep();
// }

/*
* Solution is to use smaller chunks of interfaces
* Interface with one function is perfectly fine
* If we have a lot of function we got "fat" interface
* Fat interfaces violates Single Responsibility principle
*/
interface WorkableInterface {
    public function work();
}

interface SleepableInterface {
    public function sleep();
}

// class HumanWorker implements WorkerInterface
// {
//     public function work()
//     {
//     }

//     public function sleep()
//     {
//         return 'human sleeping';
//     }
// }

class HumanWorker implements WorkableInterface, SleepableInterface, ManageableInterface {
    public function work()
    {
    }

    public function sleep()
    {
        return 'human sleeping';
    }

    public function beManaged()
    {
        $this->work();
        $this->sleep();
    }
}

// class AndroidWorker implements WorkerInterface
// {
//     public function work()
//     {
//         return 'android working';
//     }

//     /*
//     * Android does not sleep
//     * Interface segregation principle is all about
//     * Clients should not be forced to implement interfaces they don't use
//     * AndroidWorker is being forced to implement sleep method, because if we don't do that error will be thrown
//     */
//     public function sleep()
//     {
//         return null;
//     }
// }

class AndroidWorker implements WorkableInterface, ManageableInterface {
    public function work()
    {
        return 'android working';
    }

    /*
    * Android does not sleep
    * Interface segregation principle is all about
    * Clients should not be forced to implement interfaces they don't use
    * AndroidWorker is being forced to implement sleep method, because if we don't do that error will be thrown
    */
    // public function sleep()
    // {
    //     return null;
    // }

    public function beManaged()
    {
        $this->work();
    }
}

/*
* Captain class have knowledge about class Worker
* Captain is depended upon Worker also that means that he is depended upon anything that Worker is depended upon
* That may be not ideal, there is too much knowledge leakage
*/
// class Captain
// {
//     public function manage(Worker $worker)
//     {
//         $worker->work();

//         $worker->sleep();
//     }
// }

/*
* Now we have problem with Open-Closed principle
* Because AndroidWorker do not sleep we need to change manage function
*/
// class Captain
// {
//     public function manage(WorkableInterface $worker)
//     {
//         $worker->work();

//         $worker->sleep();
//     }
// }

class Captain {
    public function manage(ManageableInterface $worker)
    {
        $worker->beManaged();
    }
}
