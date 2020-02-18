
<section class="ftco-section">
  <div class="container-fluid px-4">
    <div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Makananan & Minuman</span><br>
        <h2 class="mb-4">Sing di edol</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-6 menu-wrap">
        <div class="heading-menu text-center ftco-animate">
          <h3>Makanan</h3>
        </div>
        <?php foreach ($produk as $produk):?>
          <div class="menus d-flex ftco-animate">
            <div class="menu-img img" style="background-image:  url(<?php echo base_url() ?>assets/template/front/images/bg_6.jpg);"></div>
            <div class="text">
              <div class="d-flex">
                <div class="one-half">
                  <h3><?= $produk['nama'];?></h3>
                </div>
                <div class="one-forth">
                  <span class="price">$29</span>
                </div>
              </div>
              <p><?=  $produk['detail_produk']?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="col-md-6 col-lg-6 menu-wrap">
        <div class="heading-menu text-center ftco-animate">
          <h3>Minuman</h3>
        </div>
        <div class="menus d-flex ftco-animate">
          <div class="menu-img img" style="background-image: url(images/lunch-1.jpg);"></div>
          <div class="text">
            <div class="d-flex">
              <div class="one-half">
                <h3>Grilled Beef with potatoes</h3>
              </div>
              <div class="one-forth">
                <span class="price">$29</span>
              </div>
            </div>
            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
          </div>
        </div>
        <div class="menus d-flex ftco-animate">
          <div class="menu-img img" style="background-image: url(images/lunch-2.jpg);"></div>
          <div class="text">
            <div class="d-flex">
              <div class="one-half">
                <h3>Grilled Crab with Onion</h3>
              </div>
              <div class="one-forth">
                <span class="price">$29</span>
              </div>
            </div>
            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
          </div>
        </div>
        <div class="menus d-flex ftco-animate">
          <div class="menu-img img" style="background-image: url(images/lunch-3.jpg);"></div>
          <div class="text">
            <div class="d-flex">
              <div class="one-half">
                <h3>Grilled Crab with Onion</h3>
              </div>
              <div class="one-forth">
                <span class="price">$29</span>
              </div>
            </div>
            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
          </div>
        </div>
      </div>
    </section>