<div class="border-end border-warning">
    <div class="text-center border-bottom border-warning">
        <h1 class=" st-font mt-5">OneToOne Relationship </h1>
    </div>
    <div class="text-center border-bottom border-warning mt-3">
        <ul>
            <h5>Design & Developed By</h5>
            <h6>Jaswinder singh</h6>
            <h6>haanzee@gmail.com</h6>
            <h6>+91-98037-00470 </h6>

        </ul>
    </div>
    <nav class="nav flex-column mt-3 text-center">
        <a href="{{ route('index')}}" class="nav-link {{Request::routeIs('index')? 'active' : '' }}" > Home </a>
        <a href="{{ route('show1')}}" class="nav-link {{Request::routeIs('show1')? 'active' : '' }}"> Data Entry </a>
        <a href="{{ route('edit')}}" class="nav-link {{Request::routeIs('edit')? 'active' : '' }}" > Edit Data </a>
        <a href="{{ route('delete')}}" class="nav-link {{Request::routeIs('delete')? 'active' : '' }}" > Delete Data </a>
        <a href="{{ route('projects')}}" class="nav-link {{Request::routeIs('projects')? 'active' : '' }}" > Project Details</a>
        <a href="{{ route('contactus')}}" class="nav-link {{Request::routeIs('contactus')? 'active' : '' }}" > Contact Us </a>

    </nav>
</div>