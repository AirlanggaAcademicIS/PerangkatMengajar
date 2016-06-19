var app = angular.module('formbacaan', [])
    app.controller('FormbacaanController',function($scope,$http){
        //set type data 'data' dengan object
        $scope.ata = [{Kodemk : '',Judul  : '',Tahun : '',Penulis : '',Penerbit : '',Kota : ''} ];
        //fungsi simpan
        $scope.simpan = function(){
            $http.post('http://localhost/pbm2/dosen/operasiformbacaan.php?action=insert',$scope.ata).success(function(response){
                if(response > 0){
                    $scope.ata = [{Kodemk : '',Judul  : '',Tahun : '',Penulis : '',Penerbit : '',Kota : ''} ];
                    alert('Data berhasil disimpan');
                    $scope.$apply();
                }
                else{
                    alert('Data gagal disimpan');
                }
            });
        };

        $scope.getdata = function(){
            $http.get('http://localhost/pbm2/dosen/operasiformbacaan.php?action=get').success(function(response){
                $scope.data = response;
                $scope.$apply();
            });
        };
        // init data
        $scope.getdata();

        $scope.dataedit = [];
        //ketika user klik button edit
        $scope.edit = function(index){
            //set agar ketika user input
            //munculkan input type
            $scope.data[index]['isedit'] = true;
            // masukan data yang di pilih ke array dataedit
            $scope.dataedit.push($scope.data[index]);
        };
        $scope.update = function(){
            //kirim data yang di edit saja ke server
            $http.post('http://localhost/pbm2/dosen/operasiformbacaan.php?action=update',$scope.dataedit).success(function(response){
                if(response > 0){
                    //munculkan list baru yang sudah berhasil di edit
                    $scope.getdata();
                    //tampilkan pesna sukses
                    alert($scope.pesan = ' Data telah berhasil di update');
                    $scope.$apply();
                }
            });
        }

        $scope.datadelete = [];
        //ketika user klik button edit
        $scope.check = function($KODE_BACAAN){
            //buat variabel tmp bernilai true
            //ini digunakan untuk chek apakah sudah ada
            //siswa id di dalah array data delete
            //jika sudah ada delete array dengan splce dan set
            // tmp jadi false agar tidak di push(dimasukan ke dalam array) kembali di bawah
            var tmp = true;
            for(var i = 0; i < $scope.datadelete.length;i++){
                if($scope.datadelete[i] == $KODE_BACAAN){
                    $scope.datadelete.splice(i);
                    tmp = false;
                    break;
                }
            }
            if(tmp)$scope.datadelete.push($KODE_BACAAN);
        };
        $scope.delete = function(){
            //kirim data yang di edit saja ke server
            $http.post('http://localhost/pbm2/dosen/operasiformbacaan.php?action=delete',$scope.datadelete).success(function(response){
                if(response > 0){
                    //munculkan list baru yang sudah berhasil di delete
                    $scope.getdata();
                    //tampilkan pesan sukses
                    alert($scope.pesan = ' Data telah berhasil di delete');
                    $scope.$apply();
                }
            });
        }
    });



    

   