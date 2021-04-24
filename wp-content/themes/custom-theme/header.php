<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Ruda&display=swap" rel="stylesheet">

     <title>Custom gear</title>
     <?php wp_head(); ?>
</head>

<body>
     <header class="header flex">
          <div>
               <h1 class="header-titre">custom <span>gear</span></h1>
               <nav class="header-menu">
                    <ul>
                         <li><a href="<?php the_permalink(2); ?>" > <?php echo get_the_title(2); ?></a></li>
                         <li>Calendrier</li>
                         <li>Archives</li>
                    </ul>
               </nav>
          </div>
     </header>
     <main>
