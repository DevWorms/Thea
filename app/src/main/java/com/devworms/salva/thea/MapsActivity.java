package com.devworms.salva.thea;

import android.content.Context;
import android.location.Geocoder;
import android.location.Location;
import android.os.AsyncTask;
import android.support.v4.app.FragmentActivity;
import android.support.v4.app.Fragment;
import android.os.Bundle;
import android.util.Log;

import com.google.android.gms.common.api.GoogleApiClient;
import com.google.android.gms.location.LocationServices;
import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.OnMapReadyCallback;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.MarkerOptions;

import java.io.IOException;
import java.util.Locale;

import static com.google.ads.AdRequest.LOGTAG;

public class MapsActivity extends FragmentActivity implements OnMapReadyCallback {

    private GoogleMap mMap;
    Double lon, lat;

    private GoogleApiClient apiClient;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_maps);
        // Obtain the SupportMapFragment and get notified when the map is ready to be used.
        SupportMapFragment mapFragment = (SupportMapFragment) getSupportFragmentManager()
                .findFragmentById(R.id.map);
        mapFragment.getMapAsync(this);


    }


    /**
     * Manipulates the map once available.
     * This callback is triggered when the map is ready to be used.
     * This is where we can add markers or lines, add listeners or move the camera. In this case,
     * we just add a marker near Sydney, Australia.
     * If Google Play services is not installed on the device, the user will be prompted to install
     * it inside the SupportMapFragment. This method will only be triggered once the user has
     * installed Google Play services and returned to the app.
     */
    @Override
    public void onMapReady(GoogleMap googleMap) {
        mMap = googleMap;

        // Add a marker in Sydney and move the camera
        if (checkSelfPermission("android.permission.ACCESS_FINE_LOCATION") != android.content.pm.PackageManager.PERMISSION_GRANTED && checkSelfPermission("android.permission.ACCESS_COARSE_LOCATION") != android.content.pm.PackageManager.PERMISSION_GRANTED) {
            // TODO: Consider calling
            //    Activity#requestPermissions
            // here to request the missing permissions, and then overriding
            //   public void onRequestPermissionsResult(int requestCode, String[] permissions,
            //                                          int[] grantResults)
            // to handle the case where the user grants the permission. See the documentation
            // for Activity#requestPermissions for more details.
            return;
        }
        mMap.setMyLocationEnabled(true);
        new mandarLoc().execute();
       // Location loc= LocationServices.FusedLocationApi.getLastLocation(apiClient);

         //This goes up to 21

        //  LatLng latLng = new LatLng(loc.getLatitude(), loc.getLongitude());
        //mMap.moveCamera(CameraUpdateFactory.newLatLngZoom(latLng, 16));

    }

    private void updateUI(Location loc) {
        if (loc != null) {

        } else {

        }
    }
    class mandarLoc extends AsyncTask<String, String, String> {

        /**
         * Before starting background thread Show Progress Dialog
         * */
        @Override
        protected void onPreExecute() {
            super.onPreExecute();

        }

        /**
         * getting Albums JSON
         * */
        protected String doInBackground(String... args) {
            // Building Parameters
            //add your data
            //add your data
            JSONParse jsp= new JSONParse();

            //String body= "{\r\n\"contrasena\": \""+txtPass.getText()+"\",\r\n\"telefono\": \""+txtTel.getText()+"\"\r\n}\r\n";
            String body= "{\n\"id\" : \"1\",\n\"lat\" : \""+lat+"\",\n\"lon\" : \""+lon+"\"\n}";
            String respuesta= jsp.makeHttpRequest("http://thea.devworms.com/api/usuarios/trackup","POST",body,"");
            Log.d("Respuesta : ", "> " + respuesta);
            if(respuesta!="error") {


            }
            else{}
            return null;
        }


        /**
         * After completing background task Dismiss the progress dialog
         * **/
        protected void onPostExecute(String file_url) {
            // dismiss the dialog after getting all albums


        }
    }

}
