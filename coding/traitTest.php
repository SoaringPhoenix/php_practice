<?php
trait PeanutButter {
        function traitName() {echo __TRAIT__;}
}

trait PeanutButterAndJelly {
        use PeanutButter;
}

class Test {
        use PeanutButterAndJelly;
}

(new Test)->traitName(); //PeanutButter
?>
