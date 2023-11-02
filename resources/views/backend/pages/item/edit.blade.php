@extends('backend.master')

@section('title', 'Ubah Barang')

@section('content')
<div class="section-header">
    <h1>Ubah Barang</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="">Dashboard</a></div>
      <div class="breadcrumb-item">Ubah Barang</div>
    </div>
  </div>
  
  <div class="section-body">
  
    <form action="{{ route("item.update", ["item" => $data->id]) }}" method="POST">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="row">
          <div class="col-md-8">
              <div class="card">
              <div class="card-header">
                  <h4>Ubah Barang</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="">Create Date</label>
                  <input type="date" class="form-control" id="" placeholder="CARP Code" name="create_date" value="{{ date('Y-m-d',strtotime($data->create_date)) }}" readonly>
                </div>
                <div class="form-group">
                  <label for="">CARP Code</label>
                  <input type="text" class="form-control" id="" placeholder="CARP Code" name="carp_code" value="{{ $data->carp_code }}" readonly>
                </div>
                <div class="form-group">
                  <label for="">Category</label>
                  <select name="category" class="form-control" id="" required>
                    <option value="">Pilih Category</option>
                    <option value="external complain" {{ $data->category == 'external complain' ? 'selected' : '' }}>external complain</option>
                    <option value="internal audit findings" {{ $data->category == 'internal audit findings' ? 'selected' : '' }}>internal audit findings</option>
                    <option value="internal audit findings, non conformity" {{ $data->category == 'internal audit findings, non conformity' ? 'selected' : '' }}>internal audit findings, non conformity</option>
                    <option value="internal audit findings, non conformity, external complain" {{ $data->category == 'internal audit findings, non conformity, external complain' ? 'selected' : '' }}>internal audit findings, non conformity, external complain</option>
                    <option value="internal audit findings, oportunity for improvement" {{ $data->category == 'internal audit findings, oportunity for improvement' ? 'selected' : '' }}>internal audit findings, oportunity for improvement</option>
                    <option value="internal audit findings, safety non compliance" {{ $data->category == 'internal audit findings, safety non compliance' ? 'selected' : '' }}>internal audit findings, safety non compliance</option>
                    <option value="internal complain" {{ $data->category == 'internal complain' ? 'selected' : '' }}>internal complain</option>
                    <option value="internal complain, kpi bsc monitoring" {{ $data->category == 'internal complain, kpi bsc monitoring' ? 'selected' : '' }}>internal complain, kpi bsc monitoring</option>
                    <option value="non conformity" {{ $data->category == 'non conformity' ? 'selected' : '' }}>non conformity</option>
                    <option value="non conformity, external complain" {{ $data->category == 'non conformity, external complain' ? 'selected' : '' }}>non conformity, external complain</option>
                    <option value="oportunity for improvement" {{ $data->category == 'oportunity for improvement' ? 'selected' : '' }}>oportunity for improvement</option>
                    <option value="oportunity for improvement, external complain" {{ $data->category == 'oportunity for improvement, external complain' ? 'selected' : '' }}>oportunity for improvement, external complain</option>
                    <option value="safety non compliance" {{ $data->category == 'safety non compliance' ? 'selected' : '' }}>safety non compliance</option>
                    <option value="safety non compliance, external complain" {{ $data->category == 'safety non compliance, external complain' ? 'selected' : '' }}>safety non compliance, external complain</option>
                  </select>
                </div>
                  <div class="form-group">
                    <label for="">Initiator</label>
                    <input type="text" class="form-control" id="" placeholder="Initiator" name="initiator" value="{{ $data->initiator }}" required>
                  </div>
                  <div class="form-group">
                    <label for="">Initiator Div</label>
                    <select name="initiator_div" class="form-control" id="" required>
                      <option value="">Pilih</option>
                      <option value="COMMERCIAL" {{ $data->initiator_div == 'COMMERCIAL' ? 'selected' : '' }}>COMMERCIAL</option>
                      <option value="CR" {{ $data->initiator_div == 'CR' ? 'selected' : '' }}>CR</option>
                      <option value="HSE" {{ $data->initiator_div == 'HSE' ? 'selected' : '' }}>HSE</option>
                      <option value="IC" {{ $data->initiator_div == 'IC' ? 'selected' : '' }}>IC</option>
                      <option value="KEY ACCOUNT" {{ $data->initiator_div == 'KEY ACCOUNT' ? 'selected' : '' }}>KEY ACCOUNT</option>
                      <option value="MANAGEMENT" {{ $data->initiator_div == 'MANAGEMENT' ? 'selected' : '' }}>MANAGEMENT</option>
                      <option value="OPERATION" {{ $data->initiator_div == 'OPERATION' ? 'selected' : '' }}>OPERATION</option>
                      <option value="SALES" {{ $data->initiator_div == 'SALES' ? 'selected' : '' }}>SALES</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Initiator Branch</label>
                    <select name="initiator_branch" class="form-control" id="" required>
                      <option value="">Pilih</option>
                      <option value="SUB" {{ $data->initiator_branch == 'SUB' ? 'selected' : '' }}>SUB</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Recipient</label>
                    <input type="text" class="form-control" id="" placeholder="Recipient" name="recipient" value="{{ $data->recipient }}" required>
                  </div>
                  <div class="form-group">
                    <label for="">Recipient Div</label>
                    <select name="recipient_div" class="form-control" id="" required>
                      <option value="">Pilih</option>
                      <option value="COMMERCIAL" {{ $data->recipient_div == 'COMMERCIAL' ? 'selected' : '' }}>COMMERCIAL</option>
                      <option value="CC" {{ $data->recipient_div == 'CC' ? 'selected' : '' }}>CC</option>
                      <option value="CR" {{ $data->recipient_div == 'CR' ? 'selected' : '' }}>CR</option>
                      <option value="HR&GA" {{ $data->recipient_div == 'HR&GA' ? 'selected' : '' }}>HR&GA</option>
                      <option value="HSE" {{ $data->recipient_div == 'HSE' ? 'selected' : '' }}>HSE</option>
                      <option value="IC" {{ $data->recipient_div == 'IC' ? 'selected' : '' }}>IC</option>
                      <option value="KEY ACCOUNT" {{ $data->recipient_div == 'KEY ACCOUNT' ? 'selected' : '' }}>KEY ACCOUNT</option>
                      <option value="TRUCKING" {{ $data->recipient_div == 'TRUCKING' ? 'selected' : '' }}>TRUCKING</option>
                      <option value="OPERATION" {{ $data->recipient_div == 'OPERATION' ? 'selected' : '' }}>OPERATION</option>
                      <option value="SALES" {{ $data->recipient_div == 'SALES' ? 'selected' : '' }}>SALES</option>
                      <option value="PROCUREMENT" {{ $data->recipient_div == 'PROCUREMENT' ? 'selected' : '' }}>PROCUREMENT</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Recipient Branch</label>
                    <select name="recipient_branch" class="form-control" id="" required>
                      <option value="">Pilih</option>
                      <option value="SUB" {{ $data->recipient_branch == 'SUB' ? 'selected' : '' }}>SUB</option>
                      <option value="JKT" {{ $data->recipient_branch == 'JKT' ? 'selected' : '' }}>JKT</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Verified By</label>
                    <input type="text" class="form-control" id="" placeholder="Verified By" name="verified_by" value="{{ $data->verified_by }}">
                  </div>
                  <div class="form-group">
                    <label for="">Due Date</label>
                    <input type="date" class="form-control" id="" placeholder="" name="due_date" value="{{ date('Y-m-d',strtotime($data->due_date)) }}" required>
                  </div>
                  <div class="form-group">
                    <label for="">Effectiveness</label>
                    <select name="effectiveness" class="form-control" id="" required>
                      <option value="">Pilih</option>
                      <option value="Effective" {{ $data->effectiveness == 'Effective' ? 'selected' : '' }}>Effective</option>
                      <option value="Not Effective" {{ $data->effectiveness == 'Not Effective' ? 'selected' : '' }}>Not Effective</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Status Date</label>
                    <input type="date" class="form-control" id="" placeholder="" name="status_date" value="{{ date('Y-m-d',strtotime($data->status_date)) }}" required>
                  </div>
                  <div class="form-group">
                    <label for="">Stage</label>
                    <select name="stage" class="form-control" id="" required>
                      <option value="">Pilih</option>
                      <option value="Closed" {{ $data->stage == 'Closed' ? 'selected' : '' }}>Closed</option>
                      <option value="Open" {{ $data->stage == 'Open' ? 'selected' : '' }}>Open</option>
                      <option value="Re-Open" {{ $data->stage == 'Re-Open' ? 'selected' : '' }}>Re-Open</option>
                      <option value="Responded" {{ $data->stage == 'Responded' ? 'selected' : '' }}>Responded</option>
                      <option value="Verified" {{ $data->stage == 'Verified' ? 'selected' : '' }}>Verified</option>
                      <option value="Voided" {{ $data->stage == 'Voided' ? 'selected' : '' }}>Voided</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" class="form-control" id="" required>
                      <option value="">Pilih</option>
                      <option value="Closed" {{ $data->status == 'Closed' ? 'selected' : '' }}>Closed</option>
                      <option value="Open" {{ $data->status == 'Open' ? 'selected' : '' }}>Open</option>
                      <option value="Canceled" {{ $data->status == 'Canceled' ? 'selected' : '' }}>Canceled</option>
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