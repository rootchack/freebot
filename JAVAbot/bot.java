import java.io.*;
import java.util.*;
 
public class bot{
    public static void main (String[] args) throws java.io.IOException
    {
        String s1="";
        String input="";
        boolean firstboot=true;
     if (firstboot==true){System.out.println("Hi, I am freebot, you can get out from here just typing 'Bye', Thank you"); firstboot=false;}
        Scanner sc = new Scanner(System.in);
        BufferedReader br = new BufferedReader (new FileReader ("db.txt"));
        s1 = br.readLine();
        String[] db = s1.split("@");
        while(1==1){
        input=sc.nextLine();

        if(input.equals("Bye")){System.exit(0);}

        for(int a = 0; a < db.length; a++){
        if(input.equals(db[a])) {System.out.println(db[a+1]);}
      }
    }
 }
}