<?php
$data = [];
$medicine = null;

if(isset($_POST['search'])){
    // get the search term and check it and strip from any html tags
    $query = htmlspecialchars(strip_tags($_POST['q']));
    #$json = file_get_contents("https://rxnav.nlm.nih.gov/REST/drugs.json?name=$query");
    $json = file_get_contents("https://api.fda.gov/drug/event.json?limit=1&search=$query");
    $data=array();
    $data = json_decode($json, true);
    $medicine = $data['results'][0]['patient']['drug'];
}
?>

<div class="search-container">
    <h1>Name of the medication</h1>
    <form method="POST">
        <input type="text" class="search-box" name="q" placeholder="Search...">
        <input type="submit" name="search" class="search-button" value="Search">
    </form>

        <div class="col-8 mx-auto text-left">
    <?php
        
    if($medicine):
        foreach ($medicine as $m):
            if($m['openfda']): 
    ?>
        <div class="p-3 card bg-white shadow rounded m-3">
            <p><b> <?php echo $m['medicinalproduct']; ?></b></p>
            <p>Manufacturer Name: <?php echo $m['openfda']['manufacturer_name'][0]; ?></p>
            <p>Product Type: <?php echo $m['openfda']['product_type'][0]; ?></p>
            <p>Route: <?php foreach($m['openfda']['route'] as $route): echo $route.', '; endforeach; ?></p>
            <p>Rousubstance Namete: <?php echo $m['openfda']['substance_name'][0]; ?></p>
            <p>Pharm Class PE: <?php echo $m['openfda']['pharm_class_pe'][0]; ?></p>
        </div>

    <?php
            endif;
        endforeach;
    elseif(isset($_POST['search'])):
        ?>
    <p class="text-center m-4">No results found...</p>
    <?php
    endif;
    ?>
        </div>
    
</div>



<br><br><br><br><br><br>
<br><br><br><br><br><br>
   
