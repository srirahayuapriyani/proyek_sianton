<ul class="sidebar-nav" id="sidebar-nav">
    {{-- {{ ($slug == 'dashboard') ? 'active' : '' }} --}}
    <li class="nav-item">
        <a class="nav-link {{ ($slug == 'dashboard') ? 'active' : ''  }}" href="/dashboard ">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->
    
    <li class="nav-item">
        <a class="nav-link  collapsed{{ ($slug == 'antrian') ? 'active' : ''  }}" href="/antrian ">
            <i class="bi bi-card-checklist"></i>
            <span>Antrian</span>
        </a>
    </li><!-- End Jadwal Praktik Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed{{ ($slug == 'masterpasien') ? 'active' : ''  }}" href="/masterpasien ">
            <i class="bi bi-file-earmark-person"></i>
            <span>Data Pasien</span>
        </a>
    </li><!-- End Data Admin Nav -->

    <li class="nav-item">
        <a class="nav-link  collapsed{{ ($slug == 'laporan') ? 'active' : ''  }}" href="/laporan ">
            <i class="bi bi-folder"></i>
            <span>Laporan</span>
        </a>
    </li><!-- End Setting Nav -->
</ul>