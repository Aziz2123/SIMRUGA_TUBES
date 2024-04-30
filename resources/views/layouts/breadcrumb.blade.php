<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="mb-0">{{ $title ?? config('app.name', 'SIMRUGA') }}</h1>
      </div>
      <div class="col-sm-6">
          @if( $breadcrumbs )
          <ol class="breadcrumb float-sm-right">
            @foreach ($breadcrumbs as $breadcrumb)
              <li class="breadcrumb-item {{ $loop->last ? 'active' : '' }}">
                {!! (!$loop->last) ? '<a href="' . $breadcrumb['url'] . '">' . $breadcrumb['label'] . '</a>' : $breadcrumb['label'] !!}
              </li>
            @endforeach
          @endif
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>