package com.example.goncalo.tpcf;

import android.support.annotation.NonNull;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;
import com.google.firebase.auth.AuthResult;
import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.auth.FirebaseUser;

public class Registar extends AppCompatActivity {
private Button Registar;
private EditText txtemail;
private EditText txtpass;
private FirebaseAuth mAuth;
String email,password;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_registar);
        mAuth = FirebaseAuth.getInstance();
        Registar=findViewById(R.id.buttonRegistar);
        txtemail=findViewById(R.id.email);
        txtpass=findViewById(R.id.password);

        Registar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String password= txtpass.getText().toString();
                String email=txtemail.getText().toString();
                mAuth.createUserWithEmailAndPassword(email, password).addOnCompleteListener( new OnCompleteListener<AuthResult>() {
                            @Override
                            public void onComplete(@NonNull Task<AuthResult> task) {
                                if (task.isSuccessful()) {
                                    // Sign in success, update UI with the signed-in user's information
                                    Toast.makeText(Registar.this, "Registado com sucesso",Toast.LENGTH_LONG).show();


                                } else {
                                    Toast.makeText(Registar.this, "Não foi possivel registar",Toast.LENGTH_LONG).show();
                                };

                                // ...
                            }
                        });
            }
        });
    }
}
