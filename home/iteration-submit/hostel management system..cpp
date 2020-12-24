#include<iostream>

using namespace std;

#include<fstream>

#include<stdio.h>



class hostel

{

    int room_no;

    char name[30];

    char address[50];

    char phone[10];

 

    public:

   int main_menu();   

    int add();       

  int display();  

    int rooms();   

    int edit();   

    int check(int);   

 

};

int hostel::main_menu()

{

      

    int choice=0;



    while(choice!=5)

    {       

        cout<<"\n\t\t\t\t MAIN MENU ";
        
   
        cout<<"\n\n\n\t\t\t1.Book A Room";

        cout<<"\n\t\t\t2.student Record";

        cout<<"\n\t\t\t3.Rooms Allotted";

        cout<<"\n\t\t\t4.Edit Record";

        cout<<"\n\t\t\t5.Exit";

        cout<<"\n\n\t\t\tEnter Your Choice: ";

        cin>>choice;

       

        switch(choice)

        {

            case 1: add();

                    break;

            case 2: display();

                    break;

            case 3: rooms();

                    break;

            case 4: edit();

                    break;

            case 5: break;

            default:

                    {

                        cout<<"\n\n\t\t\tWrong choice!!!";


                        return 0;

                       system("pause");

                    }

        }

    }

}



int hostel::add()

{ 

    int r,flag;

    ofstream fout("Record.txt",ios::app);

   

    cout<<"\n Enter Customer Detalis";

    cout<<"\n\n Room no: ";

    cin>>r;

    flag=check(r); 

   

    if(flag)

        cout<<"\n Room is already booked";

    else

    {

        room_no=r;

        cout<<"\n Name:\t ";

        cin>>name;

        cout<<"\n Address:\t ";

        cin>>address;

        cout<<"\n Phone No:\t ";

        cin>>phone;

              cout<<endl;

        fout.write((char*)this,sizeof(*this));

        cout<<"\n Room is booked!!!";

    }

  system("pause");

    fout.close();

    return 0;

}



int hostel::display()

{

    ifstream fin("Record.txt",ios::in); 

    int r;

    cout<<"\n Enter room no: ";

    cin>>r;

   

    while(!fin.eof())

    {

        fin.read((char*)this,sizeof(*this));

       

           if(room_no = r)

                 {

            cout<<"\n Cusromer Details";

            cout<<"\n\n Room no: "<<room_no;

            cout<<"\n Name: "<<name;

            cout<<"\n Address: "<<address;

            cout<<"\n Phone no: "<<phone;

           

              }

       else{

        cout<<"\n Sorry Room no";

             }

    system("pause");

    fin.close();

    return 0;

              }}



int hostel::rooms()

{

 

    ifstream fin("Record.txt",ios::in);

    cout<<"\n\t\t\tList Of Rooms Allotted";

  

    cout<<"\n\n Room No.\tName\t\tAddress\t\tPhone No.\n";

 

       while(!fin.eof())

    {



        fin.read((char*)this,sizeof(*this));

        cout<<"\n\n "<<room_no<<"\t\t"<<name;

        cout<<"\t\t"<<address<<"\t\t"<<phone;

             

       }





       system("pause");

    fin.close();

    return 0;

}



int hostel::edit()

{

  

    int choice,r;

    

    cout<<"\n EDIT MENU";


    cout<<"\n\n 1.Modify Customer Record";

    cout<<"\n 2.Delete Customer Record";

   

    cout<<"\n Enter your choice: ";

    cin>>choice;

   

       cout<<"\n Enter room no: ";

    cin>>r;

   


    return 0;

  system("pause");

}



int hostel::check(int r)

{

    int flag=0;

    ifstream fin("Record.txt",ios::in);

    while(!fin.eof())

    {

        fin.read((char*)this,sizeof(*this));

        if(room_no==r)

        {

            flag=1;

                break;

        }

    }

   

    fin.close();

    return(flag);

}




int main()

{

    hostel h;
    cout<<"\n\t\t\t HOSTEL MANAGEMENT PROJECT ";

    system("pause");

    h.main_menu();



}
