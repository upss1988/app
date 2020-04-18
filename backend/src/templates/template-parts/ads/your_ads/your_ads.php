<?php
$session_id = $_SESSION['id'];
$yourAds = $db->query('SELECT * FROM users_ads WHERE user_id = ? ORDER BY id DESC', $session_id)->fetchAll();

?>

<div class="row m-5">
    <?php foreach ($yourAds as $ad) : ?>
        <?php if ($ad['ads_pending'] !== 0) : ?>
            <div class="col-lg-4 mb-4">
                <div class="card custom">
                    <img class="card-img-top custom-size" src="../pages/assets/img/ads_uploaded_image/<?= $ad['ads_image'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $ad['ads_name'] ?></h5>
                        <p class="card-text custom"><?= $function->getExcerpt($ad['ads_description'], '0', '50') ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item custom"><b>Category:</b> <?= $ad['ads_category'] ?></li>
                        <li class="list-group-item custom"><b>Price:</b> <?= $ad['ads_price'] ?></li>
                        <li class="list-group-item custom"><b>Location:</b> <?= $ad['ads_location'] ?></li>
                        <li class="list-group-item custom"><b>Phone:</b> <?= $ad['ads_phone'] ?></li>
                        <li class="list-group-item custom"><b>Plan:</b> <?= $ad['ads_plan'] ?></li>
                        <li class="list-group-item custom"><b>Ad published on:</b> <?= $ad['ads_start_date'] ?></li>
                        <li class="list-group-item custom"><b>Ad ends on:</b> <?= $ad['ads_end_date'] ?></li>
                    </ul>
                    <div style="display: block" class="card-body">
                        <span style="text-decoration: underline; cursor: pointer" class="card-link editBtn" data-toggle="modal" data-target="#edit_ads">Edit</span>
                        <input type="hidden" name="edit_id" value="<?= $ad['id'] ?>" class="edit_id">

                        <span style="float: right; text-decoration: underline; cursor: pointer" class="card-link declineBtn" data-toggle="modal" data-target="#decline_ads">Decline</span>
                        <input type="hidden" name="decline_id" value="<?= $ad['id'] ?>" class="decline_id">
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>

</div>
<?php include 'C:\xampp\htdocs\app\backend\src\templates\template-parts\ads\all_ads\decline\decline_ads.php'; ?>
<?php include 'C:\xampp\htdocs\app\backend\src\templates\template-parts\ads\all_ads\edit\edit_ads_form.php'; ?>