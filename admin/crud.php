<!-- <?php
include "admin_pannel.php";
?>
<style>
    .container {
        font-weight: 800;
    }
</style>
<div class="accordion" id="accordionExample">
    <div class="container my-5 px-5 py-5 border border-light">
        <p class="h3 text-light">Categorie</p>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Click On Me
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <?php
                    include "../dbms/categorie.php";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5 px-5 py-5 border border-light">
        <p class="h3 text-light">Product</p>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Click On Me
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <?php 
                        include "../dbms/index.php";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5 px-5 py-5 border border-light">
        <p class="h3 text-light">Brand</p>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Click On Me
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <?php 
                        include "../dbms/brand_insert.php";
                    ?>
                </div>
            </div>
        </div>
    </div>
</div> -->