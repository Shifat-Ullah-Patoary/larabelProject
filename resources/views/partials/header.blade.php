 <!-- Navigation Bar -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
     <div class="container">
         <a class="navbar-brand fw-bold text-uppercase tracking-wide" href="#">
             <i class="fa-solid fa-gem text-info me-2"></i>Diamond Group
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav ms-auto">
                 <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Home</a></li>
                 <li class="nav-item"><a class="nav-link" href="#divisions">Our Divisions</a></li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('aboutus') }}">
                         About Us
                     </a>
                 </li>
                 <li class="nav-item"><a class="nav-link" href="{{ route('contract.submit') }}">Contact</a></li>
                 <li class="nav-item"><a class="nav-link" href="{{ route('login.page') }}">Login</a></li>
             </ul>
         </div>
     </div>
 </nav>
