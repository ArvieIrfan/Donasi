                        </div>
                        </div>
                        </div>
                        <!-- END MAIN CONTENT-->
                        <!-- END PAGE CONTAINER-->
                        </div>

                        </div>

                        <!-- Jquery JS -->
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

                        <!-- Bootstrap JS -->
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

                        <!-- DataTables JS -->
                        <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
                        <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>

                        <!-- CKEditor -->
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#editor'))
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>

                        <!-- DataTables Initialization -->
                        <script>
                            $(document).ready(function() {
                                $('#example').DataTable();
                            });
                        </script>

                        <!-- Additional Vendor JS -->
                        <script src="{{ asset('admin') }}/vendor/slick/slick.min.js"></script>
                        <script src="{{ asset('admin') }}/vendor/wow/wow.min.js"></script>
                        <script src="{{ asset('admin') }}/vendor/animsition/animsition.min.js"></script>
                        <script src="{{ asset('admin') }}/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
                        <script src="{{ asset('admin') }}/vendor/counter-up/jquery.waypoints.min.js"></script>
                        <script src="{{ asset('admin') }}/vendor/counter-up/jquery.counterup.min.js"></script>
                        <script src="{{ asset('admin') }}/vendor/circle-progress/circle-progress.min.js"></script>
                        <script src="{{ asset('admin') }}/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
                        <script src="{{ asset('admin') }}/vendor/chartjs/Chart.bundle.min.js"></script>
                        <script src="{{ asset('admin') }}/vendor/select2/select2.min.js"></script>

                        <!-- Main JS -->
                        <script src="{{asset('admin')}}/js/main.js"></script>

                        <!-- SweetAlert2 -->
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    </body>

                    </html>
