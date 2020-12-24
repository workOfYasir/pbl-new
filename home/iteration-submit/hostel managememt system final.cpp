#include<fstream>
#include<conio.h>
#include<string.h>
#include<iomanip>
#include<iostream>
 
using namespace std;
 
class Hostel
{
	int room_number;
	char name[30];
	char address[50];
	char phone[10];
 
	public:
	
	void add_student()
 	{
     	cout<<" The Room Number: ";
        cin>>room_number;
        cout<<"\nEnter The student's name: ";
        cin.ignore();
        cin.getline(name,30);
        cout<<"The student's address: ";
        cin.ignore();
        cin.getline(address,50);
        cout<<" student's phone #: ";
        cin.ignore();
        cin.getline(phone,10);
        cout<<"\t\t\n\nstudent added Successfully...";
    }
	
	void show_student()
	{
 		cout<<"\nRoom Number: "<<room_number;
   		cout<<"\nstudent's Name: "<<name;
     	cout<<"\nstudent's Address: "<<address;
     	cout<<"\nstudent's Phone: "<<phone;
    }
    
	void _student_record()
    {
        cout<<"\nRoom number : "<<room_number;
        cout<<"\ student's Name : ";
        cin.ignore();
        cin.getline(name,30);
        cout<<" student's address: ";
        cin.ignore();
        cin.getline(address,50);
        cout<<" student's phone #: ";
        cin.ignore();
        cin.getline(phone,10);
     }
     
     int getRoomNumber()
     {
     	return room_number;
     }
     char* getName()
     {
     	return name;
     }
     char* getAddress()
     {
     	return address;
     }
     
     char* getPhone()
     {
     	return phone;
     }
     void report()
     {
	 	cout<<room_number<<setw(10)<<name<<setw(20)<<address<<setw(20)<<phone<<endl;
     }
};
 
fstream fp;
Hostel h;
 
void save_student()
{
	system("cls");
 	int option;
  	fp.open("hostel.dat",ios::out|ios::app);
   	do
    {
    	h.add_student();
     	fp.write((char*)&h,sizeof(Hostel));
      	cout<<"\nPress 1 to add more student.";
       	cout<<"\nPress 2 to return to main menu.\n";
        cout<<"Option: ";
        cin>>option;
     }while(option == 1);
     
     fp.close();
}
 
 
void display_a_student(int r_number)
{
          system("cls");
          cout<<"\nstudent  DETAILS\n";
          int check=0;
          fp.open("hostel.dat",ios::in);
          while(fp.read((char*)&h,sizeof(Hostel)))
          {
                    if(h.getRoomNumber()==r_number)
                    {
                               h.show_student();
                              check=1;
                    }
          }
          fp.close();
          if(check==0)
          	cout<<"\n\nstudent does not exist";
        getch();
}
 
void modify_student()
{
          system("cls");
          int r_number;
          int found=0;
          cout<<"\n\n student'S RECORD";
          cout<<"\n\n\tEnter The room number: ";
          cin>>r_number;
          fp.open("hostel.dat",ios::in|ios::out);
          while(fp.read((char*)&h,sizeof(Hostel)) && found==0)
          {
                    if(h.getRoomNumber()==r_number)
                    {
                               h.show_student();
                               cout<<"\nEnter student's new information"<<endl;
                             
                               int pos=-1*sizeof(h);
                              fp.seekp(pos,ios::cur);
                              fp.write((char*)&h,sizeof(Hostel));
                              cout<<"\n\n\t Record Updated Successfully...";
                              found=1;
                    }
          }
          fp.close();
          if(found==0)
                    cout<<"\n\n Record Not Found ";
          getch();
}
 
 
void delete_student()
{
       
          char r_number;
          int flag=0;
          cout<<"\n\n\n\tDELETE student";
          cout<<"\n\nEnter The Room # of the student you wan to delete: ";
          cin>>r_number;
          fp.open("hostel.dat",ios::in|ios::out);
          fstream fp2;
          fp2.open("Temp.dat",ios::out);
          fp.seekg(0,ios::beg);
          while(fp.read((char*)&h,sizeof(Hostel)))
          {
                    if(h.getRoomNumber()==r_number)  
                    {
                               fp2.write((char*)&h,sizeof(Hostel));
                    }
                    else
                              flag=1;
          }
          fp2.close();
          fp.close();
          remove("hostel.dat");
          rename("Temp.dat","hostel.dat");
          if(flag==1)
                    cout<<"\n\n\tRecord Deleted ...";
          else
                    cout<<"\n\nRecord not found";
          getch();
}
 
 

 
void main_menu()
{
	int option;
 
	for(;;)
	{
 
         cout<<"\n\t\t *HOSTEL MANAGEMENT SYSTEM*";
                 cout<<"\n\t\tPress 1 to BOOK A ROOM";
                cout<<"\n\t\tPress 2 to DISPLAY ALL ROOMS ALLOCATTED";
                cout<<"\n\t\tPress 3 to DISPLAY SPECIFIC student RECORD";
                cout<<"\n\t\tPress 4 to MODIFY student RECORD";
                cout<<"\n\t\tPress 5 to DELETE student RECORD";
                 cout<<"\n\t\tPress 6 to Exit";

 cout<<"\n\t\tOption: ";
 cin>>option;
 switch(option)
          {
                    case 1:save_student();
					  system("cls");
                             break;
                  
                    case 3:
                              int r_number;
                               system("cls");
                  		      cout<<"\n\n\tPlease Enter student's Room Number: ";
                              cin>>r_number;
                              display_a_student(r_number);
                              break;
                    case 4:modify_student();
					system("cls");
                           break;
                    case 5: delete_student();
					system("cls");
                           break;
                    case 6: exit(0);
     					   break;
                    default:cout<<"\a";
          }
	}
	
}
 

 
 
int main(int c, char *v[])
{

	main_menu();
	return 0;
}
