<?php
namespace Iwillalwaysloveyou;
trait peanut{
        function traitName() {
                /* Trait 的名字（PHP 5.4.0 新加）。自 PHP 5.4 起此常量返回 trait 被定义时的名字（区分大小写）。Trait 名包括其被声明的作用区域（例如 Foo\Bar）。*/
                echo __TRAIT__."\n";
        }
}
trait butter{
        use peanut;}
        class magicConstants{
                use butter;
                function execute() {
                        //文件中的当前行号。
                        echo __LINE__."\n";

                        /*文件的完整路径和文件名。如果用在被包含文件中，则返回被包含的文件名。自 PHP 4.0.2 起，__FILE__ 总是包含一个绝对路径（如果是符号连接，则是解析后的绝对**路径），而在此之前的版本有时会包含一个相对路径。*/
                        echo __FILE__."\n";

                        /*文件所在的目录。如果用在被包括文件中，则返回被包括的文件所在的目录。它等价于 dirname(__FILE__)。除非是根目录，否则目录中名不包括末尾的斜杠。（PHP 5.3.0中新增） = */
                        echo __DIR__."\n";

                        /*函数名称（PHP 4.3.0 新加）。自 PHP 5 起本常量返回该函数被定义时的名字（区分大小写）。在 PHP 4 中该值总是小写字母的。 */
                        echo __FUNCTION__."\n";

                        /*类的名称（PHP 4.3.0 新加）。自 PHP 5 起本常量返回该类被定义时的名字（区分大小写）。在 PHP 4 中该值总是小写字母的。类名包括其被声明的作用区域（例如 Foo\Bar）。注意自 PHP 5.4 起 __CLASS__ 对 trait 也起作用。当用在 trait 方法中时，__CLASS__ 是调用 trait 方法的类的名字。 */
                        echo __CLASS__."\n";

                        /*类的方法名（PHP 5.0.0 新加）。返回该方法被定义时的名字（区分大小写）。 */
                        echo __METHOD__."\n";

                        /*当前命名空间的名称（区分大小写）。此常量是在编译时定义的（PHP 5.3.0 新增）。 */
                        echo __NAMESPACE__."\n";
                }
        }

(new magicConstants())->execute();
(new magicConstants())->traitName();
