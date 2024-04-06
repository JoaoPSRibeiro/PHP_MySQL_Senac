<?php
session_start();
?>
<html>
<head>
    <title>Contato</title>
    <link rel="icon" href="../images/ico_nossaloja.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    
</head>

<body>
    <div class="container">
    <?php
        include 'menu.php';
        include 'conexao.php';
    ?>
 
<div id="lipsum">
<p>
</p><ul>
<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li>Aliquam hendrerit nisi quis diam facilisis, eu ornare nibh blandit.</li>
<li>Praesent at augue ullamcorper, scelerisque lorem vitae, malesuada ligula.</li>
<li>Sed gravida purus pulvinar lobortis volutpat.</li>
<li>Suspendisse et tellus eget tortor tincidunt commodo.</li>
</ul>
<p></p>
<p>
</p><ul>
<li>Mauris a ipsum nec ante sollicitudin vehicula sit amet at ante.</li>
<li>Praesent posuere felis vehicula dignissim ultricies.</li>
<li>Sed tempor dui et lorem convallis aliquam.</li>
</ul>
<p></p>
<p>
</p><ul>
<li>Sed lobortis nisi fermentum, suscipit quam vel, laoreet tortor.</li>
<li>Mauris id velit sed est maximus ultricies.</li>
</ul>
<p></p>
<p>
</p><ul>
<li>Vestibulum ultricies quam in libero rhoncus ultrices.</li>
<li>Nam molestie nulla ac tortor pellentesque, id molestie felis convallis.</li>
<li>Morbi at justo at diam scelerisque elementum.</li>
</ul>
<p></p>
<p>
</p><ul>
<li>Duis sed sapien id tellus gravida vehicula at eget massa.</li>
<li>Aliquam vel risus quis dolor posuere rutrum varius eu leo.</li>
<li>Duis tristique mauris ut nunc viverra molestie.</li>
</ul>
<p></p></div>
<div id="generated">Generated 5 paragraphs, 120 words, 902 bytes of <a href="https://www.lipsum.com/" title="Lorem Ipsum">Lorem Ipsum</a></div>
</div>
</div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</div>
</body>
</html>