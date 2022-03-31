This repo is a demo for: [phpstan/phpstan issue #262](https://github.com/phpstan/phpstan-symfony/issues/262)

```
$ ./vendor/bin/phpstan
Note: Using configuration file /home/USER/phpstan-issue-262/phpstan.neon.
 2/2 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%

 ------ ----------------------------------------------------------------------- 
  Line   Controller/DemoController.php                                          
 ------ ----------------------------------------------------------------------- 
  18     Part $commentNew (mixed) of encapsed string cannot be cast to string.  
  20     Dumped type: Symfony\Component\HttpFoundation\Request                  
  21     Dumped type: Symfony\Component\HttpFoundation\ParameterBag             
  22     Dumped type: mixed                                                     
 ------ ----------------------------------------------------------------------- 

 ------ ------------------------------------------------------------------------------------------------- 
  Line   Kernel.php                                                                                       
 ------ ------------------------------------------------------------------------------------------------- 
  23     Generator expects value type Symfony\Component\HttpKernel\Bundle\BundleInterface, object given.  
 ------ ------------------------------------------------------------------------------------------------- 

                                                                                                                        
 [ERROR] Found 5 errors   
```
