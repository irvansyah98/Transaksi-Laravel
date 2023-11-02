@extends('backend.master')

@section('title','Tambah Barang')

@section('content')
<div class="section-header">
    <h1>Tambah Barang</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="">Dashboard</a></div>
      <div class="breadcrumb-item">Tambah Barang</div>
    </div>
  </div>
  
  <div class="section-body">
  
    <form action="{{ route('item.store') }}" method="POST">
      {{ csrf_field() }}
      <div class="row">
          <div class="col-md-8">
              <div class="card">
              <div class="card-header">
                  <h4>Tambah Barang</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="">Create Date</label>
                  <input type="date" class="form-control" id="" placeholder="CARP Code" name="create_date" value="{{ date('Y-m-d') }}" readonly>
                </div>
                <div class="form-group">
                  <label for="">CARP Code</label>
                  <input type="text" class="form-control" id="" placeholder="CARP Code" name="carp_code" value="CARP{{ $carp_code }}" readonly>
                </div>
                <div class="form-group">
                  <label for="">Category</label>
                  <select name="category" class="form-control" id="" required>
                    <option value="">Pilih Category</option>
                    <option value="external complain">external complain</option>
                    <option value="internal audit findings">internal audit findings</option>
                    <option value="internal audit findings, non conformity">internal audit findings, non conformity</option>
                    <option value="internal audit findings, non conformity, external complain">internal audit findings, non conformity, external complain</option>
                    <option value="internal audit findings, oportunity for improvement">internal audit findings, oportunity for improvement</option>
                    <option value="internal audit findings, safety non compliance">internal audit findings, safety non compliance</option>
                    <option value="internal complain">internal complain</option>
                    <option value="internal complain, kpi bsc monitoring">internal complain, kpi bsc monitoring</option>
                    <option value="non conformity">non conformity</option>
                    <option value="non conformity, external complain">non conformity, external complain</option>
                    <option value="oportunity for improvement">oportunity for improvement</option>
                    <option value="oportunity for improvement, external complain">oportunity for improvement, external complain</option>
                    <option value="safety non compliance">safety non compliance</option>
                    <option value="safety non compliance, external complain">safety non compliance, external complain</option>
                  </select>
                </div>
                  <div class="form-group">
                    <label for="">Initiator</label>
                    <input type="text" class="form-control" id="" placeholder="Initiator" name="initiator" required>
                  </div>
                  <div class="form-group">
                    <label for="">Initiator Div</label>
                    <select name="initiator_div" class="form-control" id="" required>
                      <option value="">Pilih</option>
                      <option value="COMMERCIAL">COMMERCIAL</option>
                      <option value="CR">CR</option>
                      <option value="HSE">HSE</option>
                      <option value="IC">IC</option>
                      <option value="KEY ACCOUNT">KEY ACCOUNT</option>
                      <option value="MANAGEMENT">MANAGEMENT</option>
                      <option value="OPERATION">OPERATION</option>
                      <option value="SALES">SALES</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Initiator Branch</label>
                    <select name="initiator_branch" class="form-control" id="" required>
                      <option value="">Pilih</option>
                      <option value="SUB">SUB</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Recipient</label>
                    <input type="text" class="form-control" id="" placeholder="Recipient" name="recipient" required>
                  </div>
                  <div class="form-group">
                    <label for="">Recipient Div</label>
                    <select name="recipient_div" class="form-control" id="" required>
                      <option value="">Pilih</option>
                      <option value="COMMERCIAL">COMMERCIAL</option>
                      <option value="CC">CC</option>
                      <option value="CR">CR</option>
                      <option value="HR&GA">HR&GA</option>
                      <option value="HSE">HSE</option>
                      <option value="IC">IC</option>
                      <option value="KEY ACCOUNT">KEY ACCOUNT</option>
                      <option value="TRUCKING">TRUCKING</option>
                      <option value="OPERATION">OPERATION</option>
                      <option value="SALES">SALES</option>
                      <option value="PROCUREMENT">PROCUREMENT</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Recipient Branch</label>
                    <select name="recipient_branch" class="form-control" id="" required>
                      <option value="">Pilih</option>
                      <option value="SUB">SUB</option>
                      <option value="JKT">JKT</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Verified By</label>
                    <input type="text" class="form-control" id="" placeholder="Verified By" name="verified_by">
                  </div>
                  <div class="form-group">
                    <label for="">Due Date</label>
                    <input type="date" class="form-control" id="" placeholder="" name="due_date" required>
                  </div>
                  <div class="form-group">
                    <label for="">Effectiveness</label>
                    <select name="effectiveness" class="form-control" id="" required>
                      <option value="">Pilih</option>
                      <option value="Effective">Effective</option>
                      <option value="Not Effective">Not Effective</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Status Date</label>
                    <input type="date" class="form-control" id="" placeholder="" name="status_date" required>
                  </div>
                  <div class="form-group">
                    <label for="">Stage</label>
                    <select name="stage" class="form-control" id="" required>
                      <option value="">Pilih</option>
                      <option value="Closed">Closed</option>
                      <option value="Open">Open</option>
                      <option value="Re-Open">Re-Open</option>
                      <option value="Responded">Responded</option>
                      <option value="Verified">Verified</option>
                      <option value="Voided">Voided</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" class="form-control" id="" required>
                      <option value="">Pilih</option>
                      <option value="Closed">Closed</option>
                      <option value="Open">Open</option>
                      <option value="Canceled">Canceled</option>
                    </select>
                  </div>
              </div>
              <div class="card-footer text-right">
                  <button class="btn btn-primary">Simpan</button>
              </div>
              </div>
          </div>
      </div>
    </form>
  </div>
@endsection