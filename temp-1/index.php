<?php include "./includes/db.php" ?>

<?php include "./includes/header.php"
?>

<!-- Large modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">Schedule</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-transparent" style="border: 0px">

            <div class="modal-header">
                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div style="padding: 20px 25px;">
                        <div class="row g-2 px-5" style="background-color:rgba(0,0,0,0.5);">
                            <div class="col-md-2">
                                <!-- Search form -->
                                <form class="form-inline md-form form-sm mt-0">
                                    <input class="placeholder-primary form-control bg-transparent" type="text" placeholder="Search" aria-label="Search">
                                </form>
                            </div>
                            <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-3">
                                        <div class="date" id="date1" data-target-input="nearest">
                                            <input type=" text" class="placeholder-primary form-control datetimepicker-input bg-transparent" placeholder="Check in" data-target="#date1" data-toggle="datetimepicker" data-format="DD/MM/YYYY" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="date" id="date2" data-target-input="nearest">
                                            <input type="text" class="placeholder-primary form-control datetimepicker-input bg-transparent" placeholder="Check out" data-target="#date2" data-toggle="datetimepicker" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="container">
                                            <div class="row">
                                                <span type="text" class="border no-select cursor-pointer increment-btn-adults border-glow text-center text-primary bg-transparent">Adults</span>
                                            </div>
                                            <div class="row">
                                                <span class="text-center border-glow cursor-pointer increment-btn-adults text-primary col-md-4">+</span>
                                                <span id="adultsNum" class="col-md-4 text-primary text-center bg-transparent">1</span>
                                                <span class="text-center border-glow col-md-4 cursor-pointer text-primary decrement-btn-adults">-</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="container">
                                            <div class="row">
                                                <span type="text" class="border no-select text-center cursor-pointer increment-btn-children border-glow text-center text-primary bg-transparent">Children</span>
                                            </div>
                                            <div class="row">
                                                <span class="text-center border-glow cursor-pointer increment-btn-children text-primary col-md-4">+</span>
                                                <span id="childrenNum" class="col-md-4 text-primary text-center bg-transparent">0</span>
                                                <span class="text-center border-glow cursor-pointer col-md-4 text-primary decrement-btn-children">-</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-primary w-100">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $query = "SELECT * FROM Rooms";
                $select_all_rooms_query = mysqli_query($connection, $query);

                echo '<div class="row g-4 justify-content-center">';
                while ($row = mysqli_fetch_assoc($select_all_rooms_query)) {
                    $roomType = $row['roomType'];
                    $specialty = $row['specialty'];
                    $price = $row['price'];
                    $bathtub = $row['bathtub'];
                    $bed = $row['bed'];
                    $floor = $row['floorNumber'];

                    $card = '<div class="col-lg-6 card-bump" style="background-color:rgba(0,0,0,0.5);">';
                    $card .= '<div class="card text-primary mx-auto" style="width: 18rem; background-color: transparent; color:white;">';
                    $card .= '<img class="card-img-top" src="img/room-1.jpg" alt="Card image cap">';
                    $card .= '<div class="card-body bg-transparent">';
                    $card .= '<h5 class="card-title text-white">' . $roomType . ' Room ' . $specialty . '</h5>';

                    $card .= '<div class="d-flex justify-content-around border-bottom p-3">';
                    $card .= '<span class="border-end px-2"> ' . $bathtub  . ' bath</span>';
                    $card .= '<span class="border-end px-2"> ' . $bed . ' bed</span>';
                    $card .= '<span>floor ' . $floor . ' </span>';
                    $card .= '</div>';

                    $card .= '<div class="card-text d-flex justify-content-between align-items-center">';
                    $card .= '<div class="d-flex flex-column">';
                    $card .= '<span>Per night</span>';
                    $card .= '<span class="text-white">' . $price . '$' . '</span>';
                    $card .= '</div>';
                    $card .= '<div class="d-flex align-items-center justify-content-center">';
                    $card .= '<i class="fas fa-info-circle pe-2" style="font-size:24px;"></i>';
                    $card .= '<a class="btn btn-sm btn-primary rounded" href="">Book</a>';
                    $card .= '</div>';
                    $card .= '</div>';
                    $card .= '</div>';
                    $card .= '</div>';
                    $card .= '</div>';

                    echo $card;
                }

                echo '</div>';
                ?>

                <p>Modal body text goes here.</p>
            </div>

        </div>
    </div>
</div>

<!-- Carousel Start -->
<?php include "./includes/carousel.php" ?>

<!-- Booking Start -->
<?php include "./includes/booking.php"
?>

<!-- About Us Start -->
<?php include "./includes/aboutus.php" ?>

<!-- Room Start -->
<?php include "./includes/room.php" ?>


<!-- Video Start -->
<?php include "./includes/video.php" ?>


<!-- Service Start -->
<?php include "./includes/service.php" ?>

<!-- Testimonial Start -->
<?php include "./includes/testimonial.php" ?>

<!-- Team Start -->
<?php include "./includes/team.php" ?>


<!-- Newsletter Start -->
<?php include "./includes/newsletter.php" ?>

<?php include "./includes/footer.php" ?>