
<?php $__env->startSection('title','Downloads'); ?>
<?php $__env->startSection('content'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>
<body>

    


   
<!------aplications code--------->

<style>
    .image-container {
        position: relative;
        overflow: hidden;
        width: 100%;
    }
    .image-container img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease;
    }
    .image-container:hover img {
        transform: scale(1.1);
    }
    .image-title {
        position: absolute;
        top: -30px;
        left: 50%;
        transform: translateX(-50%);
        color: #ffffff; 
        font-size: 16px; 
        transition: color 0.3s ease;
    }
    .image-container:hover .image-title {
        color: #ff0000; 
    }
</style>


<!-- Menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link btn btn-primary" href="#ΒιβλίαΘεωριας">Βιβλία Θεωριας</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn btn-primary" href="#Αιτήσεις">Αιτήσεις</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn btn-primary" href="<?php echo e(route('Dashboard')); ?>">back</a>
        </li>
    </ul>
</nav>




<h2 id="ΒιβλίαΘεωριας" style="margin-top: 50px; text-align: center;">Βιβλία Θεωρητικής Εκπαίδευσης Υποψηφίων Οδηγών</h2>
<div style="padding: 20px;">
    
</div>
<!-- First Section -->
<div id="ΒιβλίαΘεωριας" style="display: grid; grid-template-columns: repeat(4, 1fr); grid-template-rows: repeat(2, 1fr); gap: 10px; padding: 20px;">
    <!-- Image 1 -->
    <div style="text-align: center;">
        <h3>Aυτοκίνητo</h3>
        <div class="image-container">
            <img src="<?php echo e(asset('pictures-images/book_autokinito-RedL.jpg')); ?>" alt="Image 1">
            <div style="position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;">
                <a href="<?php echo e(asset('books-pdf/book_AYTOKINHTA.pdf')); ?>" class="avia-button av-jpazy0n2-fc8d2c0b32b416f41f1dac02fef7d8fe avia-icon_select-yes-left-icon avia-size-x-large avia-position-center avia-color-theme-color-highlight" target="_blank" rel="noopener noreferrer" style="background-color: red; color: white; padding: 10px 20px; text-decoration: none; display: inline-block;">
                    <span class="avia_button_icon avia_button_icon_left" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></span>
                    <span class="avia_iconbox_title">Aυτοκίνητo PDF book</span>
                </a>
            </div>
        </div>
    </div>
    <div style="text-align: center;">
        <h3>Μοτοσυκλέτα</h3>
        <div class="image-container">
            <img src="<?php echo e(asset('pictures-images/book_motosikleta-RedL-1.jpg')); ?>" alt="Image 1">
            <div style="position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;">
                <a href="<?php echo e(asset('books-pdf/ΕΓΧΕΙΡΙΔΙΟ ΥΠΟΥΡΓΕΙΟΥ ΜΗΧΑΝΗΣ.pdf')); ?>" class="avia-button av-jpazy0n2-fc8d2c0b32b416f41f1dac02fef7d8fe avia-icon_select-yes-left-icon avia-size-x-large avia-position-center avia-color-theme-color-highlight" target="_blank" rel="noopener noreferrer" style="background-color: red; color: white; padding: 10px 20px; text-decoration: none; display: inline-block;">
                    <span class="avia_button_icon avia_button_icon_left" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></span>
                    <span class="avia_iconbox_title">Μοτοσυκλέτα PDF book</span>
                </a>
            </div>
        </div>
    </div>
    <div style="text-align: center;">
        <h3>Φορτηγό</h3>
        <div class="image-container">
            <img src="<?php echo e(asset('pictures-images/book_fortigo-RedL.jpg')); ?>" alt="Image 1">
            <div style="position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;">
                <a href="<?php echo e(asset('books-pdf/book_FORTIGA_final.pdf')); ?>" class="avia-button av-jpazy0n2-fc8d2c0b32b416f41f1dac02fef7d8fe avia-icon_select-yes-left-icon avia-size-x-large avia-position-center avia-color-theme-color-highlight" target="_blank" rel="noopener noreferrer" style="background-color: red; color: white; padding: 10px 20px; text-decoration: none; display: inline-block;">
                    <span class="avia_button_icon avia_button_icon_left" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></span>
                    <span class="avia_iconbox_title">Φορτηγό PDF book</span>
                </a>
            </div>
        </div>
    </div>
    <div style="text-align: center;">
        <h3>Λεωφορείο</h3>
        <div class="image-container">
            <img src="<?php echo e(asset('pictures-images/book_leoforeio-RedL.jpg')); ?>" alt="Image 1">
            <div style="position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;">
                <a href="<?php echo e(asset('books-pdf/leoforeio.pdf')); ?>" class="avia-button av-jpazy0n2-fc8d2c0b32b416f41f1dac02fef7d8fe avia-icon_select-yes-left-icon avia-size-x-large avia-position-center avia-color-theme-color-highlight" target="_blank" rel="noopener noreferrer" style="background-color: red; color: white; padding: 10px 20px; text-decoration: none; display: inline-block;">
                    <span class="avia_button_icon avia_button_icon_left" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></span>
                    <span class="avia_iconbox_title">Download PDF 1</span>
                </a>
            </div>
        </div>
    </div>
    <div style="text-align: center;">
        <h3>ΠΕΙ Φορτηγό </h3>
        <div class="image-container">
            <img src="<?php echo e(asset('pictures-images/book_fortigo_pei-RedL.jpg')); ?>" alt="Image 1">
            <div style="position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;">
                <a href="<?php echo e(asset('books-pdf/manual_pei_fortiga.pdf')); ?>" class="avia-button av-jpazy0n2-fc8d2c0b32b416f41f1dac02fef7d8fe avia-icon_select-yes-left-icon avia-size-x-large avia-position-center avia-color-theme-color-highlight" target="_blank" rel="noopener noreferrer" style="background-color: red; color: white; padding: 10px 20px; text-decoration: none; display: inline-block;">
                    <span class="avia_button_icon avia_button_icon_left" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></span>
                    <span class="avia_iconbox_title">ΠΕΙ Φορτηγό PDF </span>
                </a>
            </div>
        </div>
    </div>
    <div style="text-align: center;">
        <h3>ΠΕΙ Λεωφορείο </h3>
        <div class="image-container">
            <img src="<?php echo e(asset('pictures-images/book_leoforeio_pei-RedL.jpg')); ?>" alt="Image 1">
            <div style="position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;">
                <a href="<?php echo e(asset('books-pdf/pei_leoforeio.pdf')); ?>" class="avia-button av-jpazy0n2-fc8d2c0b32b416f41f1dac02fef7d8fe avia-icon_select-yes-left-icon avia-size-x-large avia-position-center avia-color-theme-color-highlight" target="_blank" rel="noopener noreferrer" style="background-color: red; color: white; padding: 10px 20px; text-decoration: none; display: inline-block;">
                    <span class="avia_button_icon avia_button_icon_left" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></span>
                    <span class="avia_iconbox_title">ΠΕΙ Λεωφορείο PDF </span>
                </a>
            </div>
        </div>
    </div>
    <div style="text-align: center;">
        <h3>ADR</h3>
        <div class="image-container">
            <img src="<?php echo e(asset('pictures-images/book-ADR-RedL.jpg')); ?>" alt="Image 1">
            <div style="position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;">
                <a href="<?php echo e(asset('books-pdf/Βιβλίο-ADR.pdf')); ?>" class="avia-button av-jpazy0n2-fc8d2c0b32b416f41f1dac02fef7d8fe avia-icon_select-yes-left-icon avia-size-x-large avia-position-center avia-color-theme-color-highlight" target="_blank" rel="noopener noreferrer" style="background-color: red; color: white; padding: 10px 20px; text-decoration: none; display: inline-block;">
                    <span class="avia_button_icon avia_button_icon_left" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></span>
                    <span class="avia_iconbox_title">ADR PDF 1</span>
                </a>
            </div>
        </div>
    </div>
    <div style="text-align: center;">
        <h3>Eξέταση ΤΑΞΙ Ε.Δ.Χ</h3>
        <div class="image-container">
            <img src="<?php echo e(asset('pictures-images/Βιβλίο-Εξέτασης-ΤΑΞΙ.jpg')); ?>" alt="Image 1">
            <div style="position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;">
                <a href="<?php echo e(asset('path/to/your/pdf/file1.pdf')); ?>" class="avia-button av-jpazy0n2-fc8d2c0b32b416f41f1dac02fef7d8fe avia-icon_select-yes-left-icon avia-size-x-large avia-position-center avia-color-theme-color-highlight" target="_blank" rel="noopener noreferrer" style="background-color: red; color: white; padding: 10px 20px; text-decoration: none; display: inline-block;">
                    <span class="avia_button_icon avia_button_icon_left" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></span>
                    <span class="avia_iconbox_title">Download PDF 1</span>
                </a>
            </div>
        </div>
    </div>
</div>



<!-- Second Section -->
<h2 id="Αιτήσεις" style="margin-top: 50px; text-align: center;">Αιτήσεις για τις διαδικασίες των Διπλωμάτων</h2>
<div style="padding: 20px;">
    
</div>
<div id="Αιτήσεις" style="display: grid; grid-template-columns: repeat(4, 1fr); grid-template-rows: repeat(2, 1fr); gap: 10px; padding: 20px;">
    <!-- Image 2 -->
    <div style="text-align: center;">
        <h3>Αίτηση Αρχική Χορήγηση Α ή Β</h3>
        
        <div class="image-container">
            <img src="<?php echo e(asset('pictures-images/m-ta001-arxiki-xorigisi-a-b.jpg')); ?>" alt="Image 2">
            <div style="position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;">
                <a href="<?php echo e(asset('aplications-pdf/Μ-ΤΑΟ01 ΑΡΧΙΚΗ ΧΟΡΗΓΗΣΗ ΑΜ,Α1,Α2,Α,Β ΚΑΙ ΟΔΗΓΗΣΗ ΜΕ ΣΥΝΟΔΟ.pdf')); ?>" class="avia-button av-jpazy0n2-fc8d2c0b32b416f41f1dac02fef7d8fe avia-icon_select-yes-left-icon avia-size-x-large avia-position-center avia-color-theme-color-highlight" target="_blank" rel="noopener noreferrer" style="background-color: red; color: white; padding: 10px 20px; text-decoration: none; display: inline-block;">
                    <span class="avia_button_icon avia_button_icon_left" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></span>
                    <span class="avia_iconbox_title">Download PDF Αίτηση Αρχική Χορήγηση Α ή Β  </span>
                </a>
            </div>
        </div>
    </div>
    <div style="text-align: center;">
        <h3>Αίτηση Αρχική Χορήγηση Α ή Β</h3>
        
        <div class="image-container">
            <img src="<?php echo e(asset('pictures-images/m-tao02-epektasi-a-b-be.jpg')); ?>" alt="Image 2">
            <div style="position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;">
                <a href="<?php echo e(asset('aplications-pdf/ΕΝΤΥΠΟ Μ-ΤΑΟ02- ΕΠΕΚΤΑΣΗ Α1,Α2,Β 2021.pdf')); ?>" class="avia-button av-jpazy0n2-fc8d2c0b32b416f41f1dac02fef7d8fe avia-icon_select-yes-left-icon avia-size-x-large avia-position-center avia-color-theme-color-highlight" target="_blank" rel="noopener noreferrer" style="background-color: red; color: white; padding: 10px 20px; text-decoration: none; display: inline-block;">
                    <span class="avia_button_icon avia_button_icon_left" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></span>
                    <span class="avia_iconbox_title">Download PDF ΕΝΤΥΠΟ Μ-ΤΑΟ02- ΕΠΕΚΤΑΣΗ Α1,Α2,Β</span>
                </a>
            </div>
        </div>
    </div>
    <div style="text-align: center;">
        <h3>Επεκταση απο Β σε C1 ή C ή D1 ή D</h3>
        
        <div class="image-container">
            <img src="<?php echo e(asset('pictures-images/m-tao03-epektasi-c-d.jpg')); ?>" alt="Image 2">
            <div style="position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;">
                <a href="<?php echo e(asset('aplications-pdf/Μ-ΤΑΟ03-ΕΠΕΚΤΑΣΗ ΣΕ Γ,Δ,Ε-2021 .pdf')); ?>" class="avia-button av-jpazy0n2-fc8d2c0b32b416f41f1dac02fef7d8fe avia-icon_select-yes-left-icon avia-size-x-large avia-position-center avia-color-theme-color-highlight" target="_blank" rel="noopener noreferrer" style="background-color: red; color: white; padding: 10px 20px; text-decoration: none; display: inline-block;">
                    <span class="avia_button_icon avia_button_icon_left" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></span>
                    <span class="avia_iconbox_title">Download PDF Επεκταση απο Β σε C1 ή C ή D1 ή D (Μ-ΤΑΟ03)</span>
                </a>
            </div>
        </div>
    </div>
    <div style="text-align: center;">
        <h3>Αίτηση περί Μη χορήγησης ΠΕΙ</h3>
        <div class="image-container">
            <img src="<?php echo e(asset('pictures-images/m-tao04-mi-xorigisis-pei.jpg')); ?>" alt="Image 2">
            <div style="position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;">
                <a href="<?php echo e(asset('aplications-pdf/Μ-ΤΑΟ04 ΠΕΡΙ ΜΗ ΧΟΡΗΓΗΣΗΣ ΠΕΙ.pdf')); ?>" class="avia-button av-jpazy0n2-fc8d2c0b32b416f41f1dac02fef7d8fe avia-icon_select-yes-left-icon avia-size-x-large avia-position-center avia-color-theme-color-highlight" target="_blank" rel="noopener noreferrer" style="background-color: red; color: white; padding: 10px 20px; text-decoration: none; display: inline-block;">
                    <span class="avia_button_icon avia_button_icon_left" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></span>
                    <span class="avia_iconbox_title">Download PDF ΕΝΤΥΠΟ Αίτηση περί Μη χορήγησης ΠΕΙ (Μ-ΤΑΟ04)</span>
                </a>
            </div>
        </div>
    </div>
    <div style="text-align: center;">
        <h3>ΕΝΤΥΠΟ Αίτηση περί Μη χορήγησης ΠΕΙ</h3>
        <div class="image-container">
            <img src="<?php echo e(asset('pictures-images/m-tao05-epektasi-diplomatos-se-ce-de.jpg')); ?>" alt="Image 2">
            <div style="position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;">
                <a href="<?php echo e(asset('aplications-pdf/Μ-ΤΑΟ05-ΕΠΕΚΤΑΣΗ Γ,Δ ΕΝΤΟΣ ΤΩΝ ΚΑΤΗΓΟΡΙΩΝ 2021.pdf')); ?>" class="avia-button av-jpazy0n2-fc8d2c0b32b416f41f1dac02fef7d8fe avia-icon_select-yes-left-icon avia-size-x-large avia-position-center avia-color-theme-color-highlight" target="_blank" rel="noopener noreferrer" style="background-color: red; color: white; padding: 10px 20px; text-decoration: none; display: inline-block;">
                    <span class="avia_button_icon avia_button_icon_left" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></span>
                    <span class="avia_iconbox_title">Download PDF ΕΝΤΥΠΟ Αίτηση περί Μη χορήγησης ΠΕΙ (Μ-ΤΑΟ05)</span>
                </a>
            </div>
        </div>
    </div>
    <div style="text-align: center;">
        <h3>ΕΝΤΥΠΟ Αίτηση περί Μη χορήγησης ΠΕΙ</h3>
        <div class="image-container">
            <img src="<?php echo e(asset('pictures-images/m-tab-06-xorigisi-pei-arxiko.jpg')); ?>" alt="Image 2">
            <div style="position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;">
                <a href="<?php echo e(asset('aplications-pdf/m-tao-06-xorigisi-pei-arxiko.pdf')); ?>" class="avia-button av-jpazy0n2-fc8d2c0b32b416f41f1dac02fef7d8fe avia-icon_select-yes-left-icon avia-size-x-large avia-position-center avia-color-theme-color-highlight" target="_blank" rel="noopener noreferrer" style="background-color: red; color: white; padding: 10px 20px; text-decoration: none; display: inline-block;">
                    <span class="avia_button_icon avia_button_icon_left" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></span>
                    <span class="avia_iconbox_title">Download PDF ΕΝΤΥΠΟ Αίτηση περί Μη χορήγησης ΠΕΙ (Μ-ΤΑΟ06)</span>
                </a>
            </div>
        </div>
    </div>

    <div style="text-align: center;">
        <h3>Αίτηση Ειδικής Άδειας οδήγησης ΤΑΞΙ</h3>
        <div class="image-container">
            <img src="<?php echo e(asset('pictures-images/m-tao020-xorigisi-eidikis-adeias-taxi.jpg')); ?>" alt="Image 2">
            <div style="position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;">
                <a href="<?php echo e(asset('aplications-pdf/Μ-ΤΑΟ20-Αίτηση-χορήγησης-ΤΑΞΙ-ΕΔΧ.pdf')); ?>" class="avia-button av-jpazy0n2-fc8d2c0b32b416f41f1dac02fef7d8fe avia-icon_select-yes-left-icon avia-size-x-large avia-position-center avia-color-theme-color-highlight" target="_blank" rel="noopener noreferrer" style="background-color: red; color: white; padding: 10px 20px; text-decoration: none; display: inline-block;">
                    <span class="avia_button_icon avia_button_icon_left" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></span>
                    <span class="avia_iconbox_title">Download PDF ΕΝΤΥΠΟ Αίτηση περί Μη χορήγησης ΠΕΙ (Μ-ΤΑΟ06)</span>
                </a>
            </div>
        </div>
    </div>
    <div style="text-align: center;">
        <h3>Αιτηση Εκτυπωσης Αδειας Οδηγησης</h3>
        <div class="image-container">
            <img src="<?php echo e(asset('pictures-images/aitisi-ektiposis-adeias-odigisis.jpg')); ?>" alt="Image 2">
            <div style="position: absolute; bottom: 0; left: 0; width: 100%; text-align: center;">
                <a href="<?php echo e(asset('aplications-pdf/αιτηση-εκτυπωσης-αδειας-οδηγησης.pdf')); ?>" class="avia-button av-jpazy0n2-fc8d2c0b32b416f41f1dac02fef7d8fe avia-icon_select-yes-left-icon avia-size-x-large avia-position-center avia-color-theme-color-highlight" target="_blank" rel="noopener noreferrer" style="background-color: red; color: white; padding: 10px 20px; text-decoration: none; display: inline-block;">
                    <span class="avia_button_icon avia_button_icon_left" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></span>
                    <span class="avia_iconbox_title">Download PDF ΕΝΤΥΠΟ Αιτηση Εκτυπωσης Αδειας Οδηγησης </span>
                </a>
            </div>
        </div>
    </div>
<!-- Back to Top Button -->
<div style="text-align: center; margin-top: 20px;">
    <a href="#top" title="Go to Top" id="scroll-top-link" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello" tabindex="-1" class="avia_pop_class btn btn-primary">
        <span class="avia_hidden_link_text">Go to Top</span>
    </a>
    
</div>

    
</body>
</html>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel\webdrivingschool\resources\views/application/Application.blade.php ENDPATH**/ ?>