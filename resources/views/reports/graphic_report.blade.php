@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row my-4">

        <div class="col-md-12 ">
            <div class="card card-success border border-2 border-dark bg-light">
                <div style="background-color: #14B8CF;" class="card-header text-white fw-bold">
                    <div class="card-title text-white">Graphical Report of Fish Farm</div>

                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="fw-bold">District</label>
                        <select name="" id="Select-DDLDistrict" class="form-control select2">
                            <option value="">Choose</option>
                            <option value="">Abbottabad District</option>
                            <option value="">Bajaur District</option>
                            <option value="">Bannu District</option>
                            <option value="">Battagram District</option>
                            <option value="">Buner District</option>
                            <option value="">Charsadda District</option>
                            <option value="">Dera Ismail Khan District</option>
                            <option value="">Hangu District</option>
                            <option value="">Haripur District</option>
                            <option value="">Karak District</option>
                            <option value="">Khyber District</option>
                            <option value="">Kohat District</option>
                            <option value="">Kolai-Palas District</option>
                            <option value="">Kurram District</option>
                            <option value="">Lakki Marwat District</option>
                            <option value="">Lower Chitral District</option>
                            <option value="">Lower Dir District</option>
                            <option value="">Lower Kohistan District</option>
                            <option value="">Lower South Waziristan District</option>
                            <option value="">Malakand District</option>
                            <option value="">Mansehra District</option>
                            <option value="">Mardan District</option>
                            <option value="">Mohmand District</option>
                            <option value="">North Waziristan District</option>
                            <option value="">Nowshera District</option>
                            <option value="">Orakzai District</option>
                            <option value="">Peshawar District</option>
                            <option value="">Shangla District</option>
                            <option value="">Swabi District</option>
                            <option value="">Swat District</option>
                            <option value="">Tank District</option>
                            <option value="">Torghar District</option>
                            <option value="">Upper Chitral District</option>
                            <option value="">Upper Dir District</option>
                            <option value="">Upper Kohistan District</option>
                            <option value="">Upper South Waziristan District</option>
                            <option value="">Other</option>

                        </select>
                    </div>
                </div>
                <!-- card end  -->
                <!-- chartsjs  -->
                <div class="row"></div>
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-lg-8 col-md-8">
                        <canvas id="myChart" style="width:100%;max-width:800px"></canvas>

                        <script>
                            const districtNames = [
                                "Earthen", "Cage", "Race ways",
                                "Bio Floc", "Other"
                            ];

                            const yValues = [55, 49, 44, 34, 55];
                            const barColors = ["indigo", "green", "blue", "orange", "brown"];

                            new Chart("myChart", {
                                type: "bar",
                                data: {
                                    labels: districtNames,
                                    datasets: [{
                                        backgroundColor: barColors,
                                        data: yValues
                                    }]
                                },
                                options: {
                                    legend: {
                                        display: false
                                    },
                                    title: {
                                        display: true,
                                        text: "Capacity in Metric Ton "
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>




                <div class="row"></div>


                <div class="row justify-content-center">
                    <div class="col-sm-12 col-lg-6 col-md-6">
                        <!-- Adjusted column size for better responsiveness -->
                        <div>
                            <canvas id="pie" width="400" height="400"></canvas>
                            <!-- Adjusted width and height -->

                            <script>
                                const xpiValues = [
                                    "Earthen", "Cage", "Race ways",
                                    "Bio Floc", "Other"
                                ];

                                const ypiValues = [55, 49, 44, 24, 15];
                                const pibarColors = [
                                    "#b91d47", "#00aba9", "#2b5797", "#e8c3b9", "#1e7145"
                                ];

                                new Chart("pie", {
                                    type: "doughnut",
                                    data: {
                                        labels: xpiValues,
                                        datasets: [{
                                            backgroundColor: pibarColors,
                                            data: ypiValues
                                        }]
                                    },
                                    options: {
                                        title: {
                                            display: true,
                                            text: "Capacity in Metric Ton"
                                        },
                                        aspectRatio: 1, // Maintain a square aspect ratio
                                        cutoutPercentage: 50
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 ">
                    <div class="card card-success border border-2 border-dark bg-light">
                        <div style="background-color: #14B8CF;" class="card-header text-white fw-bold">
                            <div class="card-title text-white">Graphical Report of Water Bodies</div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">District</label>
                                <select name="" id="Select-DDLDistrict" class="form-control select2">
                                    <option value="">Choose</option>
                                    <option value="">Abbottabad District</option>
                                    <option value="">Bajaur District</option>
                                    <option value="">Bannu District</option>
                                    <option value="">Battagram District</option>
                                    <option value="">Buner District</option>
                                    <option value="">Charsadda District</option>
                                    <option value="">Dera Ismail Khan District</option>
                                    <option value="">Hangu District</option>
                                    <option value="">Haripur District</option>
                                    <option value="">Karak District</option>
                                    <option value="">Khyber District</option>
                                    <option value="">Kohat District</option>
                                    <option value="">Kolai-Palas District</option>
                                    <option value="">Kurram District</option>
                                    <option value="">Lakki Marwat District</option>
                                    <option value="">Lower Chitral District</option>
                                    <option value="">Lower Dir District</option>
                                    <option value="">Lower Kohistan District</option>
                                    <option value="">Lower South Waziristan District</option>
                                    <option value="">Malakand District</option>
                                    <option value="">Mansehra District</option>
                                    <option value="">Mardan District</option>
                                    <option value="">Mohmand District</option>
                                    <option value="">North Waziristan District</option>
                                    <option value="">Nowshera District</option>
                                    <option value="">Orakzai District</option>
                                    <option value="">Peshawar District</option>
                                    <option value="">Shangla District</option>
                                    <option value="">Swabi District</option>
                                    <option value="">Swat District</option>
                                    <option value="">Tank District</option>
                                    <option value="">Torghar District</option>
                                    <option value="">Upper Chitral District</option>
                                    <option value="">Upper Dir District</option>
                                    <option value="">Upper Kohistan District</option>
                                    <option value="">Upper South Waziristan District</option>
                                    <option value="">Other</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="fw-bold">Type of Water Body</Body></label>
                                <select name="" id="Select-DDLDistrict" class="form-control select2">
                                    <option value="">Choose</option>
                                    <option value="">Dams</option>
                                    <option value="">Rivers</option>
                                    <option value="">Streams</option>

                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <!-- First Chart -->
                            <div class="col-sm-12 col-lg-6 col-md-6">
                                <div>
                                    <canvas id="bar2" style="width:100%;max-width:800px"></canvas>
                                    <script>
                                        const districtNames4 = [
                                            "Trout", "Mahashair", "Rahu", "Mori", "Thaila", "Calbans", "Silver", "Encashment to LPR", "Big Head", "Sole", "Schizothorax sp", "Gulfaam", "Eel", "Sher Mahi", "Cat Fish", "Other"
                                        ];

                                        const yValues2 = [20, 30, 25, 20, 15, 34, 30, 18, 18, 34.25, 19, 20, 29, 19, 30];
                                        const barColors2 = ["red", "blue", "green", "yellow", "purple", "indigo", "green", "blue", "orange", "brown", "purple", "teal", "pink", "green", "golden", "gray"];

                                        new Chart("bar2", {
                                            type: "bar",
                                            data: {
                                                labels: districtNames4,
                                                datasets: [{
                                                    backgroundColor: barColors2,
                                                    data: yValues2
                                                }]
                                            },
                                            options: {
                                                legend: {
                                                    display: false
                                                },
                                                title: {
                                                    display: true,
                                                    text: "Capacity in Metric Ton"
                                                }
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="row"></div>
                            <div class="col-sm-12 col-lg-6 col-md-6">
                                <div>
                                    <canvas id="pie2" width="400" height="400"></canvas>
                                    <script>
                                        const xpiValues2 = [
                                            "Trout", "Mahashair", "Rahu", "Mori", "Thaila", "Calbans", "Silver", "Encashment to LPR", "Big Head", "Sole", "Schizothorax sp", "Gulfaam", "Eel", "Sher Mahi", "Cat Fish", "Other"
                                        ];

                                        const ypiValues2 = [20, 22, 30, 25, 20, 15, 34, 30, 18, 18, 34.25, 19, 20, 29, 19, 30];
                                        const pibarColors2 = [
                                            "#e27692", "#297373", "#decf8d", "#d3bfc6", "#b91d47", "#00aba9", "#2b5797", "#e8c3b9", "#1e7145", "#7a9ad1",
                                            "#888b8d", "#a2a2a1", "#d7b3b8", "#d8a0a5", "#2f3e46", "#8e8c8c"
                                        ];

                                        new Chart("pie2", {
                                            type: "doughnut",
                                            data: {
                                                labels: xpiValues2,
                                                datasets: [{
                                                    backgroundColor: pibarColors2,
                                                    data: ypiValues2
                                                }]
                                            },
                                            options: {
                                                title: {
                                                    display: true,
                                                    text: "Capacity in Metric Ton"
                                                },
                                                aspectRatio: 1,
                                                cutoutPercentage: 50
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="card card-success border border-2 border-dark bg-light">
                                <div style="background-color: #14B8CF;" class="card-header text-white fw-bold">
                                    <div class="card-title text-white">Graphical Report of Licenses</div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="fw-bold">District</label>
                                        <select name="" id="Select-DDLDistrict" class="form-control select2">
                                            <option value="">Choose</option>
                                            <option value="">Abbottabad District</option>
                                            <option value="">Bajaur District</option>
                                            <option value="">Bannu District</option>
                                            <option value="">Battagram District</option>
                                            <option value="">Buner District</option>
                                            <option value="">Charsadda District</option>
                                            <option value="">Dera Ismail Khan District</option>
                                            <option value="">Hangu District</option>
                                            <option value="">Haripur District</option>
                                            <option value="">Karak District</option>
                                            <option value="">Khyber District</option>
                                            <option value="">Kohat District</option>
                                            <option value="">Kolai-Palas District</option>
                                            <option value="">Kurram District</option>
                                            <option value="">Lakki Marwat District</option>
                                            <option value="">Lower Chitral District</option>
                                            <option value="">Lower Dir District</option>
                                            <option value="">Lower Kohistan District</option>
                                            <option value="">Lower South Waziristan District</option>
                                            <option value="">Malakand District</option>
                                            <option value="">Mansehra District</option>
                                            <option value="">Mardan District</option>
                                            <option value="">Mohmand District</option>
                                            <option value="">North Waziristan District</option>
                                            <option value="">Nowshera District</option>
                                            <option value="">Orakzai District</option>
                                            <option value="">Peshawar District</option>
                                            <option value="">Shangla District</option>
                                            <option value="">Swabi District</option>
                                            <option value="">Swat District</option>
                                            <option value="">Tank District</option>
                                            <option value="">Torghar District</option>
                                            <option value="">Upper Chitral District</option>
                                            <option value="">Upper Dir District</option>
                                            <option value="">Upper Kohistan District</option>
                                            <option value="">Upper South Waziristan District</option>
                                            <option value="">Other</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="row"></div>
                                <div class="row justify-content-center">
                                </div>

                                <!-- Third Set of Charts -->
                                <div class="row justify-content-center">
                                    <!-- Third Chart - Bar Graph -->
                                    <div class="col-sm-12 col-lg-6 col-md-6">
                                        <div>
                                            <canvas id="bar3" style="width:100%;max-width:800px"></canvas>
                                            <script>
                                                const districtNames3 = [
                                                    "All kinds of Nets", "Fishing Rod", "Fishing Line", "Cast Net", "Dip Net", "Spear or Hand", "Special License", "daily-non-trout", "daily-trout"
                                                ];

                                                const yValues3 = [26, 25, 30, 20, 25, 22, 20, 18, 17];
                                                const barColors3 = ["navy", "indigo", "green", "blue", "orange", "brown", "purple", "maroon", "navy"];

                                                new Chart("bar3", {
                                                    type: "bar",
                                                    data: {
                                                        labels: districtNames3,
                                                        datasets: [{
                                                            backgroundColor: barColors3,
                                                            data: yValues3
                                                        }]
                                                    },
                                                    options: {
                                                        legend: {
                                                            display: false
                                                        },
                                                        title: {
                                                            display: true,
                                                            text: "No. of Licences"
                                                        }
                                                    }
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <div class="row"></div>
                                    <!-- Fourth Chart - Pie Chart -->
                                    <div class="col-sm-12 col-lg-6 col-md-6">
                                        <div>
                                            <canvas id="pie3" width="400" height="400"></canvas>
                                            <script>
                                                const xpiValues3 = [
                                                    "All kinds of Nets", "Fishing Rod", "Fishing Line", "Cast Net", "Dip Net", "Spear or Hand", "Special License", "daily-non-trout", "daily-trout"
                                                ];

                                                const ypiValues3 = [15, 25, 30, 20, 15, 22, 20, 18, 15];
                                                const pibarColors3 = ["#a2a2a1", "#d7b3b8", "#d8a0a5", "#2f3e46",
                                                    "#e7c9b1", "#2a3a4b", "#83677b", "#b5d8eb", "#f4e4b5"
                                                ];

                                                new Chart("pie3", {
                                                    type: "doughnut",
                                                    data: {
                                                        labels: xpiValues3,
                                                        datasets: [{
                                                            backgroundColor: pibarColors3,
                                                            data: ypiValues3
                                                        }]
                                                    },
                                                    options: {
                                                        title: {
                                                            display: true,
                                                            text: "No. of Licences"
                                                        },
                                                        aspectRatio: 1,
                                                        cutoutPercentage: 50
                                                    }
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>


                                <br>
                                <!-- /.card-header -->
                                <div class="card-body ">
                                    <!-- form start -->
                                    <form method="post" enctype="multipart/form-data">

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- Col-12 -->
            </div>



        </div>
    </div>
</div>

@endsection