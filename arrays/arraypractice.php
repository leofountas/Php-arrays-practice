<?php 
    $family = ['uga','buga', 'caticorn'];
    print_r($family);
    echo '<br>';
    print_r($family[2]);

    echo '<br>';

    $recipes = array('pasta al sugo', 'lasagna','pasta e fagioli');
    print_r($recipes) ;
    echo '<br>';
    $favourite_recipes = $recipes[2];
    echo $favourite_recipes;

    echo '<br>';

    $loljng_champs = ['Shaco', 'Kayn','Rengar'];
    echo '<pre>';
    print_r($loljng_champs);
    echo '</pre>';
    echo '<br>';

    var_dump($loljng_champs);
    echo '<br>';

    $loljng_champs[] = "Lillia";
    print_r($loljng_champs);

    echo '<br>';

    $me = array (
        'name' => 'Leo',
        'status' => 'mental',
        'hobby' => array('contemplate the flow of life waiting for the inevitable end','breathe')
    );
    echo'<pre>';
    print_r($me);
    echo '</pre>';

    echo '<br>';

    $me['films'] = array('Starwars','Guerre stellari','La Guerre des Etoiles');

    echo'<pre>';
    print_r($me);
    echo '</pre>';

    echo '<br>';

    $my_friend = array(
        'name' => 'Ughino',
        'status' => 'imaginary',
        'hobbies' => array('he likes to talk with me a lot','he loves to watch me when I sleep') 
    );

    $me['friend'] = $my_friend;

    echo'<pre>';
    print_r($me);
    echo '</pre>';

    echo '<br>';

    $my_friend_hobbies = count($me['friend']['hobbies']);
    echo $my_friend_hobbies;
    echo '<br>';
    $my_hobbies = count($me['hobby']);
    echo $my_hobbies;
    echo '<br>';
    $total_hobbies = $my_friend_hobbies + $my_hobbies;
    echo $total_hobbies;
    echo '<br>';

    $me['hobby'][] = 'Remember to sleep';
    echo'<pre>';
    print_r($me);
    echo '</pre>';

    echo '<br>';

    $me['status'] = 'a bit mental';
    echo'<pre>';
    print_r($me);
    echo '</pre>';

    echo '<br>';

    $soulmate = array(
        'name' => 'bed',
        'status' => 'soft',
        'hobby' =>array('contemplate the flow of life waiting for the inevitable end','giving me comfort', 'waits for me'),
    );

    $common_hobbies = array_intersect($me['hobby'],$soulmate['hobby']);
    /**array_unique avoid the repetitions of the common elements */
    $our_hobbies = array_unique(array_merge($me['hobby'],$soulmate['hobby'])); 

    echo'<pre>';
    print_r($common_hobbies);
    print_r($our_hobbies);
    echo '</pre>';

    echo '<br>';

    $web_development = array (
        'frontend' => array(),
        'backend' => array(),
    );
    echo'<pre>';
    print_r($web_development);
    echo '</pre>';
    echo '<br>';
    var_dump($web_development);
    echo '<br>';

    $web_development['frontend'][]= 'xhtml';
    echo'<pre>';
    print_r($web_development);
    echo '</pre>';
    echo '<br>';
    var_dump($web_development);
    echo '<br>';

    $web_development['backend'][]= 'Ruby on Rails';
    echo'<pre>';
    print_r($web_development);
    echo '</pre>';
    echo '<br>';
    var_dump($web_development);
    echo '<br>';

    $web_development['frontend'][]= 'CSS';
    $web_development['backend'][]= 'Flash';
    $web_development['backend'][]= 'Javascript';
    $web_development['frontend'][] = 'Javascript';
    echo'<pre>';
    print_r($web_development);
    echo '</pre>';
    echo '<br>';
    var_dump($web_development);
    echo '<br>';

    $web_development['frontend'][0] = 'html';
    echo'<pre>';
    print_r($web_development);
    echo '</pre>';
    echo '<br>';
    var_dump($web_development);
    echo '<br>';

    unset($web_development['backend'][1]);
    echo'<pre>';
    print_r($web_development);
    echo '</pre>';
    echo '<br>';
    var_dump($web_development);
    echo '<br>';
?>