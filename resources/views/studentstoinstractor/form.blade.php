@extends('layout')
@section('title','Φορμα Εποκοινωνιας με τον καθηγητη')
@section('content')

    <div class="text-center">
      <label for="FirstName" class="form-label"><b>Φόρμα Επικοινωνίας με τον καθηγητή</b></label>
    </div>

    <form action="{{ route('post.form') }}" method="POST" class="user">
        @csrf
        
        <div class="mb-3">
          <label for="FirstName" class="form-label">First Name</label>
          <input type="text" name="FirstName" class="form-control form-control-user" id="FirstName" placeholder="First Name" required>
      </div>
  
      <div class="mb-3">
          <label for="LastName" class="form-label">Last Name</label>
          <input type="text" name="LastName" class="form-control form-control-user" id="LastName" placeholder="Last Name" required>
      </div>
      <div class="col mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control" placeholder="Description" required></textarea>
    </div>
        
       <div>
        <label for="start">{{__('Ημερομινια')}}</label>
        <input type='date' class='form-control' id='start' name='start' required value=''>
       </div>

        <label for="cars">Διαλέξτε κατηγορία διπλώματος:</label>
        <select id="cars" name="carlist">
       
          <option value="ΑΜ">ΑΜ - Άδεια Οδήγησης Μοτοποδηλάτου έως 50 κ.ε.</option>
          <option value="Α1">Α1 - Άδεια Οδήγησης Μοτοσυκλέτας έως 125 κ.ε. μέγιστη ισχύς 11 kW</option>
          <option value="Α2">Α2 - Άδεια Οδήγησης Μοτοσυκλέτας έως 35 kW</option>
          <option value="Α"> Α - Άδεια Οδήγησης Μοτοσυκλέτας χωρίς περιορισμό ισχύος ή κυβικών</option>
          <option value="Β1">Β1 - Άδεια Οδήγησης για τετράκυλα</option>
          <option value="Β"> Β - Άδεια Οδήγησης Αυτοκινήτου έως 8+1 θέσεις & φορτηγό έως 3.500 kg μικτό βάρος</option>
          <option value="ΒΕ">ΒΕ - Άδεια Οδήγησης συζευγμένων οχημάτων (ρυμουλκό Β κατ. & ρυμουλκούμενο έως 3.500 kg μικτό βάρος)</option>
          <option value="C1">C1-Άδεια Οδήγησης Φορτηγού έως 7.500 kg μικτό βάρος</option>
          <option value="C1E">C1E - Άδεια Οδήγησης Νταλίκας Φορτηγού (συρμοί ή αρθρωτά οχήματα έως 12.000 kg μικτό βάρος) </option>
          <option value="C">C - Άδεια Οδήγησης Φορτηγού </option>
          <option value="CE">CE - Άδεια Οδήγησης Νταλίκας Φορτηγού (συρμοί ή αρθρωτά οχήματα)</option>
          <option value="D1">D1 - Άδεια Οδήγησης Λεωφορείου έως 16+1 θέσεις & μέχρι 8 μέτρα μήκος </option>
          <option value="D1E ">D1E - Άδεια Οδήγησης Νταλίκας Λεωφορείου (συρμοί ή αρθρωτά οχήματα έως 16+1 θέσεις)</option>
          <option value="D">D - Άδεια Οδήγησης Λεωφορείου</option>
          <option value="DE">DE - Άδεια Οδήγησης Νταλίκας Λεωφορείου (συρμοί ή αρθρωτά οχήματα)</option>
        </select>

      <button class="btn btn-primary">Υποβολη</a>
    </form>




@endsection