@extends('layout')
@section('title', 'Δίπλωμα TAXI')
@section('content')


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
        .section {
            padding: 50px 0;
        }
        .text-right {
            text-align: right;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Driving School</a>
        </div>
    </nav>

    <!-- Car Driving License Content Section -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2> Δίπλωμα TAXI</h2>
                    <p>Για να μπορέσεις να αποκτήσεις την Ειδική Άδεια ΤΑΞΙ Ε.Δ.Χ. θα πρέπει να έχεις κλείσει τα 21 έτη.

                     Για την Ειδική Άδεια Οδήγησης Ε.Δ.Χ. αυτοκινήτων Κάρτα ΤΑΞΙ θα πρέπει απαραίτητα να είσαι κάτοχος ερασιτεχνικής άδειας οδήγησης Δίπλωμα αυτοκινήτου Β κατηγορία</p>
                   <h2>ΔΙΑΔΙΚΑΣΙΑ</h2>

                   <p>1. Ο υποψήφιος πηγαίνει σε γιατρούς οφθαλμίατρο, παθολόγο και ψυχίατρο που έχουν    σύμβαση με το υπουργείο μεταφορών.
                   2. Καταθέτει τα απαιτούμενα δικαιολογητικά στο Υπουργείο Μεταφορών για την έκδοση κάρτας υποψήφιου οδηγού ταξί.
                   4. Προγραμματίζει ημερομηνία για την γραπτή εξέταση.</p>

                   <h2>ΕΞΕΤΑΣΕΙΣ</h2>
                   <p>
                                        Ο υποψήφιος οδηγός ταξί θα εξεταστεί γραπτός στα εξής ερωτηματολόγια:

                    α. Ερωτηματολόγιο για απόκτηση ειδικής αδείας οδηγού ταξί με τα εξής θέματα:

                    Κανονισμοί, Α΄ Βοήθειες, Τεχνικά Θέματα, Τοπικά Θέματα κλπ.

                Η σχολή μας αναλαμβάνει και τα 3 στάδια της διαδικασίας
                                </p>
                </div>
                <div class="col-md-6 text-right">
                    <svg xmlns="http://www.w3.org/2000/svg" width="350" height="500" fill="currentColor" class="bi bi-taxi-front-fill" viewBox="0 0 16 16">
                        <path d="M6 1a1 1 0 0 0-1 1v1h-.181A2.5 2.5 0 0 0 2.52 4.515l-.792 1.848a.8.8 0 0 1-.38.404c-.5.25-.855.715-.965 1.262L.05 9.708a2.5 2.5 0 0 0-.049.49v.413c0 .814.39 1.543 1 1.997V14.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1.338c1.292.048 2.745.088 4 .088s2.708-.04 4-.088V14.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1.892c.61-.454 1-1.183 1-1.997v-.413q0-.248-.049-.49l-.335-1.68a1.8 1.8 0 0 0-.964-1.261.8.8 0 0 1-.381-.404l-.792-1.848A2.5 2.5 0 0 0 11.181 3H11V2a1 1 0 0 0-1-1zM4.309 4h7.382a.5.5 0 0 1 .447.276l.956 1.913a.51.51 0 0 1-.497.731c-.91-.073-3.35-.17-4.597-.17s-3.688.097-4.597.17a.51.51 0 0 1-.497-.731l.956-1.913A.5.5 0 0 1 4.309 4M4 10a1 1 0 1 1-2 0 1 1 0 0 1 2 0m10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-9 0a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H6a1 1 0 0 1-1-1"/>
                      </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection