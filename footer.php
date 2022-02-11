<footer class="site__footer">
    <section>
        <p>Mes plaisirs de la vie</p>
        <?php wp_nav_menu(array("menu" => "simple", 

                                "container"=> "nav",

                                "container_class"=>"site__footer_nav")); ?>
                                
    </section>
    <section>
        <p>Ce que j'aime en multimédia</p>
        <?php wp_nav_menu(array("menu" => "simple2", 

                                "container"=> "nav",

                                "container_class"=>"site__footer_nav")); ?>
    </section>
</footer>