package com.devworms.salva.thea;
import android.Manifest;
import android.app.Activity;
import android.content.DialogInterface;
import android.content.Intent;
import android.content.IntentSender;
import android.content.pm.PackageManager;
import android.location.Location;
import android.os.AsyncTask;
import android.support.annotation.Nullable;
import android.support.design.widget.NavigationView;
import android.support.v4.app.ActivityCompat;
import android.support.v4.app.FragmentActivity;
import android.support.v4.content.ContextCompat;
import android.support.v4.view.GravityCompat;
import android.support.v4.widget.DrawerLayout;
import android.support.v7.app.ActionBarDrawerToggle;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.view.ContextThemeWrapper;
import android.support.v7.widget.Toolbar;
import android.util.Log;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;
import android.widget.ToggleButton;

import com.google.android.gms.common.ConnectionResult;
import com.google.android.gms.common.api.GoogleApiClient;
import com.google.android.gms.common.api.PendingResult;
import com.google.android.gms.common.api.ResultCallback;
import com.google.android.gms.common.api.Status;
import com.google.android.gms.location.LocationListener;
import com.google.android.gms.location.LocationRequest;
import com.google.android.gms.location.LocationServices;
import com.google.android.gms.location.LocationSettingsRequest;
import com.google.android.gms.location.LocationSettingsResult;
import com.google.android.gms.location.LocationSettingsStatusCodes;

import org.json.JSONException;
import org.json.JSONObject;

import static com.devworms.salva.thea.R.styleable.AlertDialog;
import static com.devworms.salva.thea.R.styleable.View;

public class MainActivity extends AppCompatActivity{
    String act = "0";
    TextView btnPacnico;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        btnPacnico= (TextView) findViewById(R.id.txtPanic);
    }


    public void abrirMapa(View view){
        Intent intent = new Intent(MainActivity.this, MapsActivity.class);
        startActivity(intent);

    }

    public void abrirChat(View view){
        Intent intent = new Intent(MainActivity.this, ChatActivity.class);
        startActivity(intent);
    }


    public void pedirAyuda(View view){
       /* AlertDialog.Builder alertDialogBuilder = new AlertDialog.Builder(new ContextThemeWrapper(this, R.style.myDialog));


        // set title
        alertDialogBuilder.setTitle("Ayuda");

        // set dialog message
        alertDialogBuilder
                .setMessage("Hemos mandado los datos de su ubicación, la ayuda va en camino")
                .setCancelable(false)
                .setPositiveButton("Ok", new DialogInterface.OnClickListener() {
                    public void onClick(DialogInterface dialog, int id) {

                    }
                });

        // create alert dialog
        AlertDialog alertDialog = alertDialogBuilder.create();

        // show it
        alertDialog.show(); */
        if(act.equals("0")){
            act="1";
            btnPacnico.setText("Activado");
        }else{
            act="0";
            btnPacnico.setText("Panico");
        }
        new panicoSend().execute();
    }

    class panicoSend extends AsyncTask<String, String, String> {

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
            String body= "{\n\t\"id\" : \"1\",\n\t\"panico\" : \""+act+"\"\n}";
            String respuesta= jsp.makeHttpRequest("http://thea.devworms.com/api/usuarios/panico","POST",body,"");
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