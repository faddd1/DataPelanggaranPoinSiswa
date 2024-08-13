<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

 
     <!-- Main content -->
     <section class="content">
       <div class="container-fluid">
        @if (auth()->check() && (auth()->user()->role == 'admin' || auth()->user()->role == 'guru'))
         <div class="row">
           <div class="col-12 col-sm-20 col-md-200">
             <div class="info-box">
     
               <div class="info-box-content">
                 <span class="info-box-text">Note!!</span>
                 <span class="info-box-number">
                   
                 </span>
               </div>
               <!-- /.info-box-content -->
             </div>
             <!-- /.info-box -->
           </div>
          </div>
       
         <!-- Small boxes (Stat box) -->
         <div class="row">
         <div class="col-12 col-sm-6 col-md-3">
           <div class="info-box">
             <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

             <div class="info-box-content">
               <span class="info-box-text">TKJ</span>
               <span class="info-box-number">
                 400
               </span>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>

         <div class="col-12 col-sm-6 col-md-3">
           <div class="info-box">
             <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

             <div class="info-box-content">
               <span class="info-box-text">TKR</span>
               <span class="info-box-number">
                 300
               </span>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>

         <div class="col-12 col-sm-6 col-md-3">
           <div class="info-box">
             <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

             <div class="info-box-content">
               <span class="info-box-text">RPL</span>
               <span class="info-box-number">
                 300
               </span>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>

         <div class="col-12 col-sm-6 col-md-3">
           <div class="info-box">
             <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-users"></i></span>

             <div class="info-box-content">
               <span class="info-box-text">DPIB</span>
               <span class="info-box-number">
                 200
               </span>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>
        @endif
         <!-- /.col -->
         <div class="col-12 col-sm-6 col-md-3">
           <div class="info-box mb-3">
             <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

             <div class="info-box-content">
               <span class="info-box-text">MP</span>
               <span class="info-box-number">2999</span>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>
         <!-- /.col -->

         <!-- fix for small devices only -->
         <div class="clearfix hidden-md-up"></div>

         <div class="col-12 col-sm-6 col-md-3">
           <div class="info-box mb-3">
             <span class="info-box-icon bg-orange elevation-1"><i class="fas fa-users"></i></span>

             <div class="info-box-content">
               <span class="info-box-text">AK</span>
               <span class="info-box-number">760</span>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>
         <!-- /.col -->
         <div class="col-12 col-sm-6 col-md-3">
           <div class="info-box mb-3">
             <span class="info-box-icon bg-dark elevation-1"><i class="fas fa-users"></i></span>

             <div class="info-box-content">
               <span class="info-box-text">SK</span>
               <span class="info-box-number">70</span>
             </div>
             <!-- /.info-box-content -->
           </div>
           <!-- /.info-box -->
         </div>
         <!-- /.col -->
       </div>
         <!-- /.row -->
         <!-- Main row -->
         <div class="row">
            <div class="card">
             <div class="card-header">
               <h3 class="card-title">Striped Full Width Table</h3>
             </div>
             <!-- /.card-header -->
             <div class="card-body p-0">
               <table class="table table-striped">
                 <thead>
                   <tr>
                     <th style="width: 10px">#</th>
                     <th>Task</th>
                     <th>Progress</th>
                     <th style="width: 40px">Label</th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <td>1.</td>
                     <td>Update software</td>
                     <td>
                       <div class="progress progress-xs">
                         <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                       </div>
                     </td>
                     <td><span class="badge bg-danger">55%</span></td>
                   </tr>
                   <tr>
                     <td>2.</td>
                     <td>Clean database</td>
                     <td>
                       <div class="progress progress-xs">
                         <div class="progress-bar bg-warning" style="width: 70%"></div>
                       </div>
                     </td>
                     <td><span class="badge bg-warning">70%</span></td>
                   </tr>
                   <tr>
                     <td>3.</td>
                     <td>Cron job running</td>
                     <td>
                       <div class="progress progress-xs progress-striped active">
                         <div class="progress-bar bg-primary" style="width: 30%"></div>
                       </div>
                     </td>
                     <td><span class="badge bg-primary">30%</span></td>
                   </tr>
                   <tr>
                     <td>4.</td>
                     <td>Fix and squish bugs</td>
                     <td>
                       <div class="progress progress-xs progress-striped active">
                         <div class="progress-bar bg-success" style="width: 90%"></div>
                       </div>
                     </td>
                     <td><span class="badge bg-success">90%</span></td>
                   </tr>
                 </tbody>
               </table>
             </div>
             <!-- /.card-body -->
           </div>
           <div class="col-md-6">
             <!-- /.card -->
 
             <!-- PRODUCT LIST -->
             <div class="card">
               <div class="card-header">
                 <h3 class="card-title">Striped Full Width Table</h3>
               </div>
               <!-- /.card-header -->
               <div class="card-body p-0">
                 <table class="table table-striped">
                   <thead>
                     <tr>
                       <th style="width: 10px">#</th>
                       <th>Task</th>
                       <th>Progress</th>
                       <th style="width: 40px">Label</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>1.</td>
                       <td>Update software</td>
                       <td>
                         <div class="progress progress-xs">
                           <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                         </div>
                       </td>
                       <td><span class="badge bg-danger">55%</span></td>
                     </tr>
                     <tr>
                       <td>2.</td>
                       <td>Clean database</td>
                       <td>
                         <div class="progress progress-xs">
                           <div class="progress-bar bg-warning" style="width: 70%"></div>
                         </div>
                       </td>
                       <td><span class="badge bg-warning">70%</span></td>
                     </tr>
                     <tr>
                       <td>3.</td>
                       <td>Cron job running</td>
                       <td>
                         <div class="progress progress-xs progress-striped active">
                           <div class="progress-bar bg-primary" style="width: 30%"></div>
                         </div>
                       </td>
                       <td><span class="badge bg-primary">30%</span></td>
                     </tr>
                     <tr>
                       <td>4.</td>
                       <td>Fix and squish bugs</td>
                       <td>
                         <div class="progress progress-xs progress-striped active">
                           <div class="progress-bar bg-success" style="width: 90%"></div>
                         </div>
                       </td>
                       <td><span class="badge bg-success">90%</span></td>
                     </tr>
                   </tbody>
                 </table>
               </div>
               <!-- /.card-body -->
             </div>
             <!-- /.card -->
           </div>
         </div>
         <!-- /.row (main row) -->
       </div><!-- /.container-fluid -->
     </section>
</x-layout>