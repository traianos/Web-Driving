@extends('layout')
@section('title', 'Δίπλωμα ADR')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Driving License</title>
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

        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            table, th, td {
                border: 1px solid black;
            }
            th, td {
                padding: 8px;
                text-align: center;
            }
            th {
                background-color: #f2f2f2;
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
                    <h2>Δίπλωμα ADR</h2>
                    <p>
                        Το πιστοποιητικό ADR οδηγού, δίνει το δικαίωμα σε οδηγούς οχημάτων, να μεταφέρουν επικίνδυνα εμπορεύματα σε συσκευασίες ή με βυτιοφόρα, όπως προβλέπονται από την Ευρωπαϊκή Συμφωνία για την Οδική Μεταφορά Επικίνδυνων Εμπορευμάτων ADR
                    </p>
                    <h2>Βασική εκπαίδευση</h2>
                    <p>

                        Η εκπαίδευση αυτή είναι απαραίτητη για όλες τις κλάσεις επικίνδυνων υλικών και επιτρέπει τη χορήγηση Πιστοποιητικού Επαγγελματικής Κατάρτισης για τις περιπτώσεις που δεν απαιτείται πρόσθετη εκπαίδευση.
                        
                        Διάρκεια εκπαίδευσης 18 ώρες
                    </p>
                    <h2>Βασική εκπαίδευση + βυτία</h2>
                    <p>

                        Η εκπαίδευση αυτή είναι απαραίτητη για όλες τις κλάσεις επικίνδυνων υλικών, για μεταφορές με βυτιοφόρα οχήματα.
                        
                        Διάρκεια εκπαίδευσης 12 ώρες
                        </p>
                      

                        <h2>	
                            Εκπαίδευση στην Κλάση 1
                        </h2>
                        <p>
                            Πρόσθετη Εκπαίδευση για μεταφορές των υλών της κλάσης 1 της Συμφωνίας ADR.

                            Διάρκεια εκπαίδευσης 8 ώρες

                        </p>
                        <h2>
                            Εκπαίδευση στην Κλάση 7
                        </h2>
                        <p>
                                        

                        Πρόσθετη Εκπαίδευση για μεταφορές των υλών της κλάσης 7 της Συμφωνίας ADR.

                        Διάρκεια εκπαίδευσης 8 ώρες

                        </p>

                </div>
                <div class="col-md-6 text-right">
                    <svg xmlns="http://www.w3.org/2000/svg" width="350" height="500" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                        <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15"/>
                      </svg>
                </div>
            </div>
        </div>
    </section>
    <h2>Αρχική Χορήγηση Πιστοποιητικού ADR Οδηγού</h2>

<table>
    <tr>
        <th>ΚΑΤΗΓΟΡΙΑ ΠΙΣΤΟΠΟΙΗΤΙΚΟΥ ADR ΟΔΗΓΟΥ</th>
        <th>ΠΡΟΓΡΑΜΜΑ ΕΠΑΓΓΕΛΜΑΤΙΚΗΣ ΚΑΤΑΡΤΙΣΗΣ</th>
        <th>ΚΛΑΣΕΙΣ ΥΛΙΚΩΝ + ΚΑΤΗΓΟΡΙΕΣ ΟΧΗΜΑΤΩΝ ΠΟΥ ΚΑΛΥΠΤΟΥΝ</th>
        <th>ΩΡΕΣ ΚΑΤΑΡΤΙΣΗΣ</th>
    </tr>
    <tr>
        <td>Π1</td>
        <td>α</td>
        <td>Συσκευασίες όλων των κλάσεων πλην της 1 και 7</td>
        <td>18 (3 ημέρες)</td>
    </tr>
    <tr>
        <td>Π2</td>
        <td>α+γ</td>
        <td>Συσκευασίες όλων των κλάσεων πλην της 7</td>
        <td>26 (4 ημέρες)</td>
    </tr>
    <tr>
        <td>Π3</td>
        <td>α+δ</td>
        <td>Συσκευασίες όλων των κλάσεων πλην της 1</td>
        <td>26 (4 ημέρες)</td>
    </tr>
    <tr>
        <td>Π4</td>
        <td>α+γ+δ</td>
        <td>Συσκευασίες όλων των κλάσεων</td>
        <td>34 (5 ημέρες)</td>
    </tr>
    <tr>
        <td>Π5</td>
        <td>α+β</td>
        <td>Συσκευασίες και βυτία όλων των κλάσεων πλην της 1 και 7</td>
        <td>30 (4 ημέρες)</td>
    </tr>
    <tr>
        <td>Π6</td>
        <td>α+β+γ</td>
        <td>Συσκευασίες και βυτία όλων των κλάσεων πλην της 7</td>
        <td>38 (5 ημέρες)</td>
    </tr>
    <tr>
        <td>Π7</td>
        <td>α+β+δ</td>
        <td>Συσκευασίες και βυτία όλων των κλάσεων πλην της 1</td>
        <td>38 (5 ημέρες)</td>
    </tr>
    <tr>
        <td>Π8</td>
        <td>α+β+γ+δ</td>
        <td>Συσκευασίες και βυτία όλων των κλάσεων</td>
        <td>46 (6 ημέρες)</td>
    </tr>
</table>


    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection