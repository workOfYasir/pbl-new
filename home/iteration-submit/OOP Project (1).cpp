#include<iostream>
#include<fstream>
#include<conio.h>
#include<iomanip>
#include<stdlib.h>
#include<cstring>
using namespace std;
class shady
{
	private:
		char name[20],grade[5],remarks[15],msgpf[20],msgcal[20],msgeng[20],msgcomp[20];
		int PF,CAL,ENG,COMP,total;
		float sgpa,pfgpa,calgpa,enggpa,compgpa;
	public:
		int roll;
		shady()
		{
			strcpy(name,"Empty");
			strcpy(grade,"\0");
			strcpy(remarks,"\0");
			strcpy(msgpf,"\0");
			strcpy(msgcal,"\0");
			strcpy(msgeng,"\0");
			strcpy(msgcomp,"\0");
			roll=0; PF=0; CAL=0; ENG=0; COMP=0; total=0;
			sgpa=0; pfgpa=0; calgpa=0; enggpa=0; compgpa=0;
		}
		
	void inpuT() //entering information of student
	{
		cin.getline(name,20);
		cout<<"Enter roll number                      : ";
		cin>>roll;
		cin.ignore();
		cout<<"Enter marks of Programing Fundamentals : ";
		cin>>PF;
		cout<<"Enter marks of Calculas                : ";
		cin>>CAL;
		cout<<"Enter marks of English                 : ";
		cin>>ENG;
		cout<<"Enter marks of Computing               : ";
		cin>>COMP;
		cin.ignore();
		total=CAL+PF+ENG+COMP;
		cout<<endl;	
		messagE();
		gpA();
		sgpA();
	}//void input end
		
	void messagE()
	{
		if(PF<50)
		{
			strcpy(msgpf,"*Repeat PF ");
		}//if end
		else
		{
			strcpy(msgpf,"\0");
		}//else end
		
		if(CAL<50)
		{
			strcpy(msgcal,"*Repeat CAL ");
		}//if end
		else
		{
			strcpy(msgcal,"\0");
		}//else end
		
		if(COMP<50)
		{
			strcpy(msgcomp,"*Repeat COMP ");
		}//if end
		else
		{
			strcpy(msgcomp,"\0");
		}//else end
		
		if(ENG<50)
		{
			strcpy(msgeng,"*Repeat ENG ");
		}//if end
		else
		{
			strcpy(msgeng,"\0");
		}//else end
	}//void message end

	void gpA() //calculating gpa of each subject according to marks entered
	{
		switch(PF) //assigning gpa of PF
		{
		case 85 ... 100:
			pfgpa=4.0;
		break;
		case 80 ... 84:
			pfgpa=3.75;
		break;
		case 75 ... 79:
			pfgpa=3.50;
		break;
		case 70 ... 74:
			pfgpa=3.0;
		break;
		case 65 ... 69:
			pfgpa=2.50;
		break;
		case 60 ... 64:
			pfgpa=2.0;
		break;
		case 55 ... 59:
			pfgpa=1.50;
		break;
		case 50 ... 54:
			pfgpa=1.0;
		break;
		case 0 ... 49:
			pfgpa=0;
		break;
		} // PF switch end
		
		switch(CAL)  //assigning gpa of calculas
		{
		case 85 ... 100:
			calgpa=4.0;
		break;
		case 80 ... 84:
			calgpa=3.75;
		break;
		case 75 ... 79:
			calgpa=3.50;
		break;
		case 70 ... 74:
			calgpa=3.0;
		break;
		case 65 ... 69:
			calgpa=2.50;
		break;
		case 60 ... 64:
			calgpa=2.0;
		break;
		case 55 ... 59:
			calgpa=1.50;
		break;
		case 50 ... 54:
			calgpa=1.0;
		break;
		case 0 ... 49:
			calgpa=0;
		break;
		} // CAL switch end

		switch(ENG) //assigning gpa of english according to marks entered
		{
		case 85 ... 100:
			enggpa=4.0;
		break;
		case 80 ... 84:
			enggpa=3.75;
		break;
		case 75 ... 79:
			enggpa=3.50;
		break;
		case 70 ... 74:
			enggpa=3.0;
		break;
		case 65 ... 69:
			enggpa=2.50;
		break;
		case 60 ... 64:
			enggpa=2.0;
		break;
		case 55 ... 59:
			enggpa=1.50;
		break;
		case 50 ... 54:
			enggpa=1.0;
		break;
		case 0 ... 49:
			enggpa=0;
		break;
		} // ENG switch end

		switch(COMP)//assigning gpa of computer according to marks entered
		{
		case 85 ... 100:
			compgpa=4.0;
		break;
		case 80 ... 84:
			compgpa=3.75;
		break;
		case 75 ... 79:
			compgpa=3.50;
		break;
		case 70 ... 74:
			compgpa=3.0;
		break;
		case 65 ... 69:
			compgpa=2.50;
		break;
		case 60 ... 64:
			compgpa=2.0;
		break;
		case 55 ... 59:
			compgpa=1.50;
		break;
		case 50 ... 54:
			compgpa=1.0;
		break;
		case 0 ... 49:
			compgpa=0;
		break;
		} // switch end
		total=CAL+PF+ENG+COMP;	
	}//void gpa end

	void sgpA() // calculating sgpa and assigning grade and remarks according to sgpa
	{
		sgpa=((4*pfgpa)+((3*(calgpa+compgpa+enggpa)) ))/13;
		total=CAL+PF+ENG+COMP;
 		//assigning grade and remarks according to sgpa
		if(sgpa > 3.75 && sgpa < 4.01)
		{
			strcpy(grade,"A");
			strcpy(remarks,"Excellent");
		}
		else if(sgpa > 3.50 && sgpa < 3.76)
		{
			strcpy(grade,"A-");
			strcpy(remarks,"Very Good");
		}
		else if(sgpa > 3.0 && sgpa < 3.51)
		{
			strcpy(grade,"B+");
			strcpy(remarks,"Good");
		}
		else if(sgpa > 2.50 && sgpa < 3.01)
		{
			strcpy(grade,"B");
			strcpy(remarks,"Satisfactory");
		}
		else if(sgpa > 2.0 && sgpa < 2.51)
		{
			strcpy(grade,"C+");
			strcpy(remarks,"Above Average");
		}
		else if(sgpa > 1.50 && sgpa < 2.01)
		{
			strcpy(grade,"C");
			strcpy(remarks,"Average");
		}
		else if(sgpa > 1.0 && sgpa < 1.51)
		{
			strcpy(grade,"D+");
			strcpy(remarks,"Pass");
		}
		else if(sgpa > 0 && sgpa < 1.01)
		{
			strcpy(grade,"D");
			strcpy(remarks,"Just Pass");
		}
		else if(sgpa == 0)
		{
			strcpy(grade,"F");
			strcpy(remarks,"Fail");
		}//nested if end	
	}//void sgpa end

	void outpuT(shady s[50],int n)
	{
		cout<<" | "<<left<<setw(6)<<roll<<" | "<<left<<setw(23)<<name<<" | "
		<<setw(2)<<PF<<" | "<<setw(3)<<CAL<<" | "<<setw(3)<<ENG<<" | "<<setw(4)<<COMP<<" | "
		<<setw(5)<<total<<" | "<<setw(4)<<setprecision(2)<<sgpa<<" | "<<setw(5)<<grade<<" | "
		<<setw(14)<<remarks<<" | "<<msgpf<<msgcal<<msgcomp<<msgeng<<endl;
	}//void output end

	void ediT(shady s[50],int n,int search)// Searching and editing record according to roll number
	{
		if(search==roll)
		{
			cout<<"\7\n \tMatch Found "<<endl;
			cout<<"\nEnter new marks of "<<name<<"."<<endl;
			cout<<"\nProgramming Fundamentals : ";
			cin>>PF;
			cout<<"Calculas                 : ";
			cin>>CAL;
			cout<<"English                  : ";
			cin>>ENG;
			cout<<"Computing                : ";
			cin>>COMP;
			messagE();
			gpA();
			sgpA();
			cout<<endl;
			system("pause");
			system("cls");
			cout<<"\n\t\t\t\t\t        Record Updated"<<endl;
		}//if end		
	}//void edit end
		
};//class end
	
//member functions
void input(shady s[50],int n)
{
	ofstream data("E:\\University\\Semester 3\\Object Oriented Programming\\Project\\database.dll",ios::binary);
	for(int i=0;i<n;i++)
	{
		cout<<"\7Enter name of student "<<setw(3)<<i+1<<"              : ";
		s[i].inpuT();
		data.write((char*)(&s[i]),sizeof(s[i]));//writing data to file
	}//loop end
	data.close();//closing file
}//input end

void output(shady s[50],int n)
{	
cout<<"\7\n\t\t\t\t\t    Displaying Information";
cout<<"\n"<<endl;
cout<<"-----------------------------------------------------------------------------------------------------------"<<endl;
cout<<"| SR # |"<<" ROLL # |"<<"  \t    NAME          |"<<" PF |"<<" CAL |"<<" ENG |"<<" COMP |"<<" TOTAL |"
<<" SGPA |"<<" GRADE |"<<"     REMARKS    | "<<endl;
cout<<"-----------------------------------------------------------------------------------------------------------"<<endl;
ifstream data1("E:\\University\\Semester 3\\Object Oriented Programming\\Project\\database.dll",ios::binary);
for(int i=0;i<n;i++)
{
	data1.read((char*)(&s[i]),sizeof(s[i]));
	cout<<"| "<<left<<setw(4)<<i+1;
	s[i].outpuT(s,n);
}//loop end	
cout<<"-----------------------------------------------------------------------------------------------------------"<<endl;
data1.close();
}

void edit(shady s[50],int n)
{
	ifstream data1("E:\\University\\Semester 3\\Object Oriented Programming\\Project\\database.dll",ios::binary);
	ofstream data("E:\\University\\Semester 3\\Object Oriented Programming\\Project\\database.dll",ios::binary);
	int search;
	cout<<"\7\nEnter Roll No. to search for record : ";
	cin>>search;
	for(int i=0;i<n;i++)
	{
		s[i].ediT(s,n,search);
		data.write((char*)(&s[i]),sizeof(s[i]));
		if(search==s[i].roll)
		{	
			output(s,n);
			data1.read((char*)(&s[i]),sizeof(s[i]));
			goto SEARCHEND;
		}//if end
	}//loop end
	data.close();
	data1.close();
	//code to run when no match found
	system("cls");
	cout<<"\n\t\t\t\t\t\7\7        No Match Found"<<endl;
	cout<<"\n\t\t\t\t\t      Record Not Updated"<<endl;
SEARCHEND:
	cout<<endl;
}//edit end

int main()
{
	shady s[50];
	int n,choice;
	char ch;
	START:
	cout<<"\n\t\t\tFor how many students you want to enter record : ";
	cin>>n;
	cout<<"\7";
	system("cls");
	//menu
	REPEAT:
	cout<<"\t\t\t ______________________________________________________________"<<endl;	
	cout<<"\t\t\t|     \t\t\t   MAIN MENU                           |"<<endl;
	cout<<"\t\t\t|                                                              |"<<endl;
	cout<<"\t\t\t| Enter 1 for Entering Record for Students.                    |"<<endl;
	cout<<"\t\t\t| Enter 2 for Displaying Complete Record of Students.          |"<<endl;
	cout<<"\t\t\t| Enter 3 for Searching and Editing marks of a Student.        |"<<endl;
	cout<<"\t\t\t| Enter 4 for Setting Number of Students.                      |"<<endl;
	cout<<"\t\t\t| Enter 0 to Exit.                                             |"<<endl;
	cout<<"\t\t\t|______________________________________________________________|"<<endl;
	cout<<"\n\t\t\t\t\t\t   ==> ";
	cin>>choice;
	switch(choice)
	{
		case 1:
			
			system("cls");
			cout<<"\n";
			cin.ignore();
			input(s,n);
			system("cls");
			goto REPEAT;
			break;
		case 2:
			system("cls");
			output(s,n);
			break;
		case 3:
			system("cls");
			edit(s,n);
			break;
		case 4:
			system("cls");
			goto START;
			break;	
		case 0:
			goto EXIT;
		default:
			system("cls");
			cout<<"\7\7\7\n\t\t\t\t\t      Wrong code Try Again "<<endl;
			goto REPEAT;
	}//switch end
	cout<<"\n\t\t\t\tDo you want to go back to Main Menu (Y/N) ? ";cin>>ch;
	if(ch=='Y' || ch=='y')
	{
		system("cls");
		goto REPEAT;
	}
	else
	{
		goto EXIT;
	}
	EXIT:
		system("cls");
		cout<<"\7\n\t\t\t\t\tPress any key to close Window. . . ."<<endl<<endl; 
		getch();
		exit(0);
}//main end
