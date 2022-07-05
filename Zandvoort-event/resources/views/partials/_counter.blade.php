{{-- Entries counter --}}
<x-card class="p-10 max-w-lg mx-auto mt-10">
    <?php
        $con = mysqli_connect("localhost", "testuser","pwU1234","zandvoort_persauto_race");

        $sql = "SELECT * FROM entry";

        if ($result = mysqli_query($con, $sql)) {
            $count = mysqli_num_rows( $result );

            printf("Zoveel coureurs gingen jouw al voor:<b> $count</b> !");
        }

        mysqli_close($con);
    ?>
</x-card>
