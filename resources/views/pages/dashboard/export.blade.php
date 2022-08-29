                            <table>
                                <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">No</th>
                                        <th class="wd-20p border-bottom-0">Nama Tamu</th>
                                        <th class="wd-10p border-bottom-0">Tipe Kamar</th>
                                        <th class="wd-10p border-bottom-0">Kamar</th>
                                        {{-- <th class="wd-10p border-bottom-0">Kamar</th> --}}
                                        <th class="wd-10p border-bottom-0">Tanggal Check In</th>
                                        <th class="wd-10p border-bottom-0">Tanggal Check Out</th>
                                        <th class="wd-10p border-bottom-0">Fasilitas Extra</th>
                                        <th class="wd-10p border-bottom-0">Status Pembayaran</th>
                                        <th class="wd-10p border-bottom-0">Total</th>
                                        {{-- <th class="wd-10p border-bottom-0">Aksi</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pemesanan as $ps)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$ps->tamu}}</td>
                                        <td>{{$ps->kamar->tipekamar->nama}}</td>
                                        <td>{{$ps->kamar->no_kamar}}</td>
                                        <td>{{date('d/m/Y',strtotime ($ps->checkin))}}</td>
                                        <td>{{date('d/m/Y',strtotime ($ps->checkout))}}</td>
                                        @if ($ps->extra_service == null)
                                        <td>Tidak Ada</td>
                                        @else
                                        <td>{{$ps->extra_service}}</td>
                                        @endif
                                        <td>{{$ps->status_pembayaran}}</td>
                                        @if ($ps->extra_service == null)
                                        <td>Rp.{{number_format($ps->kamar->tipekamar->harga, 0, ',','.')}}</td>
                                        @else
                                        <td>Rp.{{number_format(50000+$ps->kamar->tipekamar->harga, 0, ',','.')}}</td>
                                        @endif
                                        {{-- <td>
                
                                            <a class="btn btn-primary" href="{{url ('pemesanan/'. $ps->id. '/edit')}}"> <span class="fe fe-edit"> Edit</span></a>
                                            <a class="btn btn-danger" href="{{url ('pemesanan/'. $ps->id.'/print')}}"> <span class="fe fe-printer"> Print</span></a>
                                        </td> --}}
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                       
