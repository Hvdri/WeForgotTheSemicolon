<?php $this->load->view('navbar'); ?>



<div class="adaugare">
    <a href="<?php echo base_url() . 'login/change_sal'; ?>">
        <button class="btn2" type="button">Schimba salariul</button>
    </a>

    <div class="canvas-cont">
        <canvas class="pie" id="pie_chart"></canvas>
    </div>


    <div class="terog">

        <p>CAS - Asigurari sociale.</p>
        <p>CASS - Asigurari sociale de sanatate.</p>
        <p>IV - Impozit pe venit</p>

    </div>






    
</div>






</body>

<script>
    const data = {
        labels: ["CAS", "CASS", "IV", "Facturi", "Cheltuieli", "Savings"],
        datasets: [{
            label: "Impartire (lei)",
            backgroundColor: ["#9e32bf", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850", "#03c2fc"],
            data: [
                <?php echo $cas; ?>,
                <?php echo $cass; ?>,
                <?php echo $iv; ?>,
                <?php echo $facturi; ?>,
                <?php echo $consum; ?>,
                <?php echo $rest; ?>
            ],

        }]
    };



    const config = {

        type: 'pie',
        data: data,
        options: {

            responsive: true,
            maintainAspectRatio: false,

            title: {
                display: true,
                text: 'Impartirea salariului pentru luna curenta (lei)'
            }
        }

    };

    const pie_chart = new Chart(

        document.getElementById("pie_chart"),
        config
    );

    new Chart(ctx, {


    });
</script>

</html>