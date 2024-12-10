@section('page_title',  'All')
<x-adminlayout>
<div class="page-title-wrapper">
    <div class="page-title-heading">
      <div class="page-title-icon">
        <i class="pe-7s-user icon-gradient bg-mean-fruit"> </i>
      </div>
      <div>
       Users
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="main-card mb-3 card">
      <div class="table-responsive">
        <table
          class="align-middle mb-0 table table-borderless table-striped table-hover">
          <thead>
            <tr>
              <th class="text-center">#</th>
              <th>Name</th>
              <th class="text-center">Email</th>
              <th class="text-center">Status</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center text-muted">#55</td>
              <td>
                <div class="widget-content p-0">
                  <div class="widget-content-wrapper">
                    <div class="widget-content-left mr-3">
                      <div class="widget-content-left">
                        <img
                          width="40"
                          class="rounded-circle"
                          src="assets/images/avatars/1.jpg"
                          alt="" />
                      </div>
                    </div>
                    <div class="widget-content-left flex2">
                      <div class="widget-heading">
                        Vinnie Wagstaff
                      </div>
                      <div class="widget-subheading opacity-7">
                        UI Designer
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              <td class="text-center">Amsterdam</td>
              <td class="text-center">
                <div class="badge badge-info">On Hold</div>
              </td>
              <td class="text-center">
                <button
                  type="button"
                  id="PopoverCustomT-4"
                  class="btn btn-primary btn-sm">
                  Details
                </button>
                <button
                  type="button"
                  id="PopoverCustomT-4"
                  class="btn btn-primary btn-sm">
                  Edit
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</x-adminlayout>