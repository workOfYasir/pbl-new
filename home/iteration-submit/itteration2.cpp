#include <iostream>
#include<Windows.h>
#include<conio.h>
using namespace std;
void line();
int main();
int ChefMain();
int AdminMain();
class signUp:private Person,file
{
    public:
	signUp(string idd,string fn,string ln,string add,string ph,string des,string pass):Person(idd,ln,fn,ph,add,des,pass)
	{
		
	}
  void signup()
  {  
	   bool flag=false;
	  write.open("Staff.csv",ios::app);
	  read.open("Staff.csv",ios::in);
	 
	   while (!read.eof())
	  {
		getline(read,searchId,',');
		getline(read,searchPass,',');
		getline(read,searchFName,',');
		getline(read,searchLName,',');
		getline(read,searchPhone,',');
		getline(read,searchAdd,',');
		getline(read,searchDesig,'\n');
		
		if(id==searchId)
		{
			cout<<"\t\t\tSorry Jaani ID Already Exicst "<<endl;
			flag=true;
			break;
			
			
		}
	  }

	  read.close();
	  if(flag==false)
	  {
		  write<<id<<','<<password<<','<<firstName<<','<<lastName<<','<<phone<<','<<address<<designation<<endl;
	   dislay();
	  }
	  
	  write.close();
	  
  }

};
class signIn:private Person,file{
	 public:
	signIn()
	{
		searchId=searchPass="none";
		check=false;
	}
	signIn(string idd,string pass)
	{
		searchId=idd;
		searchPass=pass;
	}
	signIn(string idd)
	{
		searchId=idd;
		
	}
bool signin()
  {
	  read.open("Staff.csv",ios::in);
	while(!read.eof())
    { 
		getline(read,id,',');
		getline(read,password,',');
        getline(read,firstName,',');
		getline(read,lastName,',');
		getline(read,phone,',');
		getline(read,address,',');
		getline(read,designation,'\n');
		if(id==searchId && password==searchPass)
        {
			return true;
			check=true;
            break;
        }
	
    }
		if(check==false)
    {
		   cout<<"\t\t\t Wrong Password OR Id"<<endl;
		   return false;
 
		
    }
    read.close();
	
}
  
 void forGottonPass()
  {
	 read.open("Staff.csv",ios::in);
	while(!read.eof())
    { 
		getline(read,id,',');
		getline(read,password,',');
        getline(read,firstName,',');
		getline(read,lastName,',');
		getline(read,phone,',');
		getline(read,address,'\n');
		if(id==searchId)
        {
	        cout<<"\t\t\tID : "<<id<<endl;
			cout<<"\t\t\tPassword: "<<password<<endl;
			check=true;
            break;
        }
	
    }
		if(check==false)
    {
        cout<<" \t\t\n ID did'nt Match \n";
		
    }
    read.close();
}
  

};
class adminFunctionelity:public categoryDetail,file,ItemDetail{
public:
void afterSignInFunctionalety()
 {
	 system("cls");
	 while(true)
		   {
              line();
	         cout<<"\t\t\t1.Add Category"<<endl;
	         line();
	         cout<<"\t\t\t2.Delete Category"<<endl;
	        line();
	        cout<<"\t\t\t3.Update Category"<<endl;
	         line();
			  cout<<"\t\t\t4.Add Food"<<endl;
	         line();
	         cout<<"\t\t\t5.Delete Food"<<endl;
	         line();
	        cout<<"\t\t\t6.Update Food"<<endl;
	         line();
	        cout<<"\t\t\t7.Show All Category"<<endl;
	        line();
			cout<<"\t\t\t8.Show All Food"<<endl;
			line();
			cout<<"\t\t\t9.Back"<<endl;
			line();
	       cout<<"\t\t\tSelect An Option >>>> ";cin>>choice;
		   switch (choice)
		   {
			   
		   case 1:
			   system("cls");
			     addCategory();
			   break;
		   case 2:
			   system("cls");
			    delCategory();
			   break;

		   case 3:
			   system("cls");
			    UpdateCategory();
			   break;

		   case 4:
			   system("cls");
			    addFood();
			   break;

		   case 5:
			   system("cls");
			    delFood();
			   break;


		   case 6:
			   system("cls");
			   UpdateFood();
			   break;
		   case 7:
			   system("cls");
			   ShowDeals();
			   system("pause");
			   system("cls");

			   break;
		   case 8:
			   system("cls");
		       ShowItemFood();
			   system("pause");
			   system("cls");
			   break;
		   case 9:
			   system("cls");
			   AdminMain(); 
			   break;
		   default:
			   cout<<"\t\t\t Please Select A Right Option : "<<endl;
			   system("pause");
			   system("cls");
			   break;
		   }


		   }

 }
void ShowDeals()
	{
		read.open("Category.csv",ios::in);
		while(!read.eof())
		{
		    getline(read,categoryName,',');
			setCategoryName(categoryName);
			getline(read,food1,',');
			setFood1(food1);
			getline(read,food2,',');
			setFood2(food2);
			getline(read,food3,',');
			setFood3(food3);
			getline(read,drink,',');
			setDrink(drink);
			getline(read,price,'\n');
			setPrice(price);
			if(categoryName != "")
			{
				line();
			  DisplayCategoryRes();
			    line();
			}
				
			}
		
		read.close();
		
	}
void ShowItemFood()
{
		read.open("food.csv",ios::in);
		while(!read.eof())
		{
			getline(read,foodId,',');
			setFoodId(foodId);
			getline(read,foodName,',');
			setFoodName(foodName);
			getline(read,foodPrice,',');
			setPrice(foodPrice);
			getline(read,foodDescription,'\n');
			setDescription(foodDescription);
			if(foodId != "")
			{
		    line();
			displayFoodRes();
			line();
			}
				
			}
		
		read.close();
		
	}
void addCategory()
	{   cout<<"\t\t\t 1.Add Category "<<endl<<"\t\t\t 2. Back"<<endl;
	  cout<<"\t\t\t Select an Options : ";cin>>choice;
	 switch (choice)
	 {
	 case 1:
		 system("cls");
		 cin.ignore();
		write.open("Category.csv",ios::app);
		cout<<"\t\t\tEnter Category Name :";getline(cin,categoryName);
		setCategoryName(categoryName);
		cout<<"\t\t\t       Enter Food 1 : ";getline(cin,food1);
		setFood1(food1);
		cout<<"\t\t\t       Enter Food 2 : ";getline(cin,food2);
		setFood2(food2);
		cout<<"\t\t\t       Enter Food 3 : ";getline(cin,food3);
		setFood3(food3);
		cout<<"\t\t\t        Enter Drink : ";getline(cin,drink);
		setDrink(drink);
		cout<<"\t\t\t        Enter Price : ";getline(cin,price);
		setDrink(drink);
		write<<categoryName<<','<<food1<<','<<food2<<','<<food3<<','<<drink<<','<<price<<endl;
		write.close();
		
		DisplayCategoryRes();
		 break;
	 case 2:
		 system("cls");
		 afterSignInFunctionalety();
		 break;
	 default:
		 system("cls");
		 cout<<"\t\t\t Select A Right Option "<<endl;
		 addCategory();
		 break;
	 }
		
	    
	}
void delCategory()
	{
     cout<<"\t\t\t 1.Delete Category "<<endl<<"\t\t\t 2. Back"<<endl;
	 cout<<"\t\t\t Select an Options : ";cin>>choice;
	 cin.ignore();
	 switch (choice)
	 {
	 case 1:
		 system("cls");
		read.open("Category.csv",ios::in);
		temp.open("temp.csv",ios::out);
		cout<<"\t\t\tEnter Category Name Do You Want Delete : ";getline(cin,searchCategory);
		setCategoryName(searchCategory);
		setCheck();
		while(!read.eof())
		{
			getline(read,categoryName,',');
			getline(read,food1,',');
			getline(read,food2,',');
			getline(read,food3,',');
			getline(read,drink,',');
			getline(read,price,'\n');

				if(categoryName==searchCategory)
				{
					check=true;
					cout<<"\t\t\t Category Deleted "<<getCategoryName()<<endl;
					continue;
					
					
					
				}
				else
				{
					temp<<categoryName<<','<<food1<<','<<food2<<','<<food3<<','<<drink<<','<<price<<endl;
				}

		}
		if(check==false)
		{
			cout<<"\t\t\t Sorry Category Does'nt Match "<<getCategoryName()<<endl;

		}
		read.close();
		temp.close();
		temp.open("temp.csv",ios::in);
		write.open("Category.csv",ios::out);
		while(!temp.eof())
		{
			getline(temp,categoryName,',');
			getline(temp,food1,',');
			getline(temp,food2,',');
			getline(temp,food3,',');
			getline(temp,drink,',');
			getline(temp,price,'\n');
			if(categoryName!="")
			{
				write<<categoryName<<','<<food1<<','<<food2<<','<<food3<<','<<drink<<','<<price<<endl;
			}
		}
		temp.close();
		write.close();
		remove("temp.csv");
		break;
	 case 2:
		 system("cls");
		 afterSignInFunctionalety();
		 break;
	 default:
		  system("cls");
		 cout<<"\t\t\t Select A Right Option "<<endl;
		 delCategory();
		 break;
	 }

	}
void UpdateCategory()
	{
		 cout<<"\t\t\t 1.Update Category "<<endl<<"\t\t\t 2. Back"<<endl;
	     cout<<"\t\t\t Select an Options : ";cin>>choice;
		 
		switch (choice)
		{
		case 1:
			system("cls");
			cin.ignore();
		read.open("Category.csv",ios::in);
		temp.open("temp.csv",ios::out);
		cout<<"\t\t\tEnter Category Name Do You Want Update : ";getline(cin,searchCategory);
		setCategoryName(searchCategory);
		setCheck();
		while(!read.eof())
		{
	         getline(read,categoryName,',');
			getline(read,food1,',');
			getline(read,food2,',');
			getline(read,food3,',');
			getline(read,drink,',');
			getline(read,price,'\n');
				if(categoryName==searchCategory)
				{
					cout<<"\t\t\t What do you want Update \n"<<"\t\t\t 1.Category Name \n"<<"\t\t\t 2. Food No 1 \n"<<
						"\t\t\t 3. Food No 2\n"<<"\t\t\t 4. Food No 3\n"<<"\t\t\t 5. Drink \n"<<"\t\t\t 6. Price \n"
						<<"\t\t\t 7.Back"<<endl;
					cout<<"\t\t\t Select an Option : ";cin>>choice;
					switch (choice)
					{
					case 1:
						system("cls");
						cin.ignore();
						cout<<"\t\t\tEnter Category Name :";getline(cin,categoryName);
		                setCategoryName(categoryName);
						temp<<categoryName<<','<<food1<<','<<food2<<','<<food3<<','<<drink<<','<<price<<endl;
						check=true;
						break;
					case 2:
						system("cls");
						cin.ignore();
						cout<<"\t\t\t Enter Food 1 : ";getline(cin,food1);
						setFood1(food1);
						temp<<categoryName<<','<<food1<<','<<food2<<','<<food3<<','<<drink<<','<<price<<endl;
						cout<<"\t\t\t Successfully Updated : "<<getFood1()<<endl;
						check=true;
						break;
                    case 3:
						system("cls");
						cin.ignore();
						cout<<"\t\t\t Enter Food 2 : ";getline(cin,food2);
						setFood2(food2);
						temp<<categoryName<<','<<food1<<','<<food2<<','<<food3<<','<<drink<<','<<price<<endl;
						cout<<"\t\t\t Successfully Updated : "<<getFood2()<<endl;
						check=true;
						break;
					case 4:
						system("cls");
						cin.ignore();
						cout<<"\t\t\t Enter Food 3 : ";getline(cin,food3);
						setFood3(food3);
						temp<<categoryName<<','<<food1<<','<<food2<<','<<food3<<','<<drink<<','<<price<<endl;
						cout<<"\t\t\t Successfully Updated : "<<getFood3()<<endl;
						check=true;
						break;
					case 5:
						system("cls");
						cin.ignore();
						cout<<"\t\t\t Enter Drink : ";getline(cin,drink);
						setDrink(drink);
						temp<<categoryName<<','<<food1<<','<<food2<<','<<food3<<','<<drink<<','<<price<<endl;
						cout<<"\t\t\t Successfully Updated : "<<getDrink()<<endl;
						check=true;
						break;
					case 6:
						system("cls");
						cin.ignore();
						cout<<"\t\t\t Enter Price : ";getline(cin,price);
						setPrice(price);
						temp<<categoryName<<','<<food1<<','<<food2<<','<<food3<<','<<drink<<','<<price<<endl;
						cout<<"\t\t\t Successfully Updated : "<<getPrice()<<endl;
						check=true;
						break;
					case 7:
					     system("cls");
		                 afterSignInFunctionalety();
						break;
					default:
						system("cls");
						cout<<"\t\t\t Select A Right Option "<<endl;
						UpdateCategory();
						break;
					}
				   		   
				}
				else
				{
					 temp<<categoryName<<','<<food1<<','<<food2<<','<<food3<<','<<drink<<','<<price<<endl;
				}

		}
		if(check==false)
		{
			cout<<"\t\t\t Sorry Category Does'nt Match "<<getCategoryName()<<endl;

		}
		read.close();
		temp.close();
		temp.open("temp.csv",ios::in);
		write.open("Category.csv",ios::out);
		while(!temp.eof())
		{
			getline(temp,categoryName,',');
			getline(temp,food1,',');
			getline(temp,food2,',');
			getline(temp,food3,',');
			getline(temp,drink,',');
			getline(temp,price,'\n');
			if(categoryName != " ")
			{
				write<<categoryName<<','<<food1<<','<<food2<<','<<food3<<','<<drink<<','<<price<<endl;
			}
		}
		temp.close();
		write.close();
		remove("temp.csv");
			break;
		case 2:
			system("cls");
		 afterSignInFunctionalety();
			break;
		default:
	     system("cls");
		 cout<<"\t\t\t Select A Right Option "<<endl;
		 UpdateCategory();
		 break;
		}
		

	}
void addFood()
	{
		cout<<"\t\t\t 1.Add Food "<<endl<<"\t\t\t 2. Back"<<endl;
	    cout<<"\t\t\t Select an Options : ";cin>>choice;
		
		switch (choice)
		{
		case 1:
			system("cls");
			cin.ignore();
		write.open("food.csv",ios::app);
		cout<<"\t\t\t Enter Food ID : ";getline(cin,foodId);
		setFoodId(foodId);
		cout<<"\t\t\t Enter Food Name : ";getline(cin,foodName);
		setFoodName(foodName);
		cout<<"\t\t\t Enter Food price : ";getline(cin,foodPrice);
		setFoodPrice(foodPrice);
		cout<<"\t\t\t Enter Food Description : ";getline(cin,foodDescription);
		setDescription(foodDescription);
		write<<foodId<<','<<foodName<<','<<foodPrice<<','<<foodDescription<<endl;
		write.close();
		displayFoodRes();
			break;
		case 2:
			system("cls");
		 afterSignInFunctionalety();
			break;
		default:
			system("cls");
		   cout<<"\t\t\t Select A Right Option "<<endl;
		   addFood();
			break;
		}
		

	}
void delFood()
	{
		cout<<"\t\t\t 1.Delete Food "<<endl<<"\t\t\t 2. Back"<<endl;
	     cout<<"\t\t\t Select an Options : ";cin>>choice;
		
		switch (choice)
		{
		case 1:
			system("cls");
			cin.ignore();
        read.open("food.csv",ios::in);
		temp.open("temp.csv",ios::out);
		cout<<"\t\t\tEnter Food ID Do You Want Delete : ";getline(cin,searchId);
		setFoodId(searchId);
		setCheck();
		while(!read.eof())
		{
			getline(read,foodId,',');
			getline(read,foodName,',');
			getline(read,foodPrice,',');
			getline(read,foodDescription,'\n');
			if(searchId==foodId)
				{
					
					check=true;
					cout<<"\t\t\t Food Deleted " << getFoodId()<<endl;
					continue;
					
				}
				else
				{
					temp<<foodId<<','<<foodName<<','<<foodPrice<<','<<foodDescription<<endl;
				}

		}
		if(check==false)
		{     
		cout<<"\t\t\t Sorry Food Does'nt Match "<<getFoodId()<<endl;

		}
		read.close();
		temp.close();
		temp.open("temp.csv",ios::in);
		write.open("food.csv",ios::out);
		while(!temp.eof())
		{
			getline(temp,foodId,',');
			getline(temp,foodName,',');
			getline(temp,foodPrice,',');
			getline(temp,foodDescription,'\n');
			if(foodId==" ")
			{
				write<<foodId<<','<<foodName<<','<<foodPrice<<','<<foodDescription<<endl;
			}
		}
		temp.close();
		write.close();
		remove("temp.csv");
			break;
		case 2:
			system("cls");
		 afterSignInFunctionalety();
			break;
		default:
			system("cls");
		   cout<<"\t\t\t Select A Right Option "<<endl;
		   addFood();
			break;
		}
	}
void UpdateFood()
	{
		cout<<"\t\t\t 1.Update Food "<<endl<<"\t\t\t 2. Back"<<endl;
	     cout<<"\t\t\t Select an Options : ";cin>>choice;
		switch (choice)
		{
		case 1:
			system("cls");
			cin.ignore();
			read.open("food.csv",ios::in);
		temp.open("temp.csv",ios::out);
		cout<<"\t\t\tEnter Food ID Do You Want Update : ";getline(cin,searchId);
		setCheck();
		while(!read.eof())
		{
			getline(read,foodId,',');
			getline(read,foodName,',');
			getline(read,foodPrice,',');
			getline(read,foodDescription,'\n');
			if(searchId==foodId)
				{
					cout<<"\t\t\t What do you want Update \n"<<"\t\t\t 1.Food ID \n"<<"\t\t\t 2. Food Name \n"<<
						"\t\t\t 3. Food Price \n"<<"\t\t\t 4. Description \n"
						<<"\t\t\t 5.Back"<<endl;
					cout<<"\t\t\t Select an Option : ";cin>>choice;
					switch (choice)
					{					
					case 1:
						system("cls");
						cout<<"\t\t\tEnter Food ID:";getline(cin,foodId);
						temp<<foodId<<','<<foodName<<','<<foodPrice<<','<<foodDescription<<endl;
						check=true;
						break;
					case 2:
						system("cls");
						cout<<"\t\t\t Enter Food Name : ";getline(cin,foodName);
						temp<<foodId<<','<<foodName<<','<<foodPrice<<','<<foodDescription<<endl;
						cout<<"\t\t\t Successfully Updated : "<<foodName<<endl;
						check=true;
						break;
                    case 3:
						system("cls");
						cout<<"\t\t\t Enter Food Price : ";getline(cin,foodPrice);
						temp<<foodId<<','<<foodName<<','<<foodPrice<<','<<foodDescription<<endl;
						cout<<"\t\t\t Successfully Updated : "<<foodPrice<<endl;
						check=true;
						break;
					case 4:
						system("cls");
						cout<<"\t\t\t Enter Food Description : ";getline(cin,foodDescription);
						temp<<foodId<<','<<foodName<<','<<foodPrice<<','<<foodDescription<<endl;
						cout<<"\t\t\t Successfully Updated : "<<foodDescription<<endl;
						check=true;
						break;
					case 5:
						system("cls");
		             afterSignInFunctionalety();
						break;
					default:
						system("cls");
						cout<<"\t\t\t Select A Right Option "<<endl;
						UpdateCategory();
						break;
					}
					
				}
				else
				{
					temp<<foodId<<','<<foodName<<','<<foodPrice<<','<<foodDescription<<endl;
				}

		}
		if(check==false)
		{
			cout<<"\t\t\t Sorry Category Does'nt Match "<<getFoodId()<<endl;

		}
		read.close();
		temp.close();
		temp.open("temp.csv",ios::in);
		write.open("food.csv",ios::out);
		while(!temp.eof())
		{
            getline(temp,foodId,',');
			getline(temp,foodName,',');
			getline(temp,foodPrice,',');
			getline(temp,foodDescription,'\n');
			if(foodId==" ")
			{
				write<<foodId<<','<<foodName<<','<<foodPrice<<','<<foodDescription<<endl;
			}
		}
		temp.close();
		write.close();
			break;
		case 2:
			system("cls");
		 afterSignInFunctionalety();
			break;
		default:
			system("cls");
		   cout<<"\t\t\t Select A Right Option "<<endl;
		   addFood();
			break;
		}
       
		
	}
void signDeliveryBoy()
{

}
void UnsignDeliveryBoy()
{

}

};
class Admin:private Person,file
{
public:
       void signp()
	   {   
		   SetConsoleTextAttribute(h,FOREGROUND_GREEN | FOREGROUND_INTENSITY);
		   cin.ignore();
		   cout<<"\t\t\t   Enter ID : ";getline(cin,id);
		   cout<<"\t\t\t First Name : ";getline(cin,firstName);
		   cout<<"\t\t\t  Last Name : ";getline(cin,lastName);
		   cout<<"\t\t\t      Phone : ";getline(cin,phone);
		   cout<<"\t\t\t    Address : ";getline(cin,address);
		   cout<<"\t\t\tDesignation : ";getline(cin,designation);
		   cout<<"\t\t\t   Password : ";getline(cin,password);
		   signUp sign(id,firstName,lastName,address,designation,phone,password);
		   sign.signup();
	   }
	   void logi()
	   {
		   bool che;
		   SetConsoleTextAttribute(h,FOREGROUND_GREEN | FOREGROUND_INTENSITY);
		   cin.ignore();
		   cout<<"\t\t\tEnter ID : ";getline(cin,id);
		   cout<<"\t\t\tPassword : ";getline(cin,password);
		   signIn sign(id,password);
		   che=sign.signin();
		   if(che==true)
		   {
		     adminFunctionelity af;
		     af.afterSignInFunctionalety();
		  
		   }
		   else
		   {
			   AdminMain();
		   }


	   }
 void forgotpass(){
		     
		       SetConsoleTextAttribute(h,FOREGROUND_RED | FOREGROUND_INTENSITY);
	           cout<<"\t\t\tFORGOTTON PASSWORD Y?N : ";
			   cin>>Schoice;
			   if(Schoice=="y" ||Schoice == "Y")
			   {
				   cout<<"\t\t\t Enter Your ID : ";cin>>searchId;

				   signIn forpass(searchId);
				   forpass.forGottonPass();
				   
			   }
			   else
			   {
				   AdminMain();
			   }
	   }


};
int AdminMain()
{
	int choice;
	Admin admin;
	cout<<"\n\n\n"<<endl;
	SetConsoleTextAttribute(h,FOREGROUND_GREEN | FOREGROUND_INTENSITY);
   while(true)
   {   line();
	   cout<<"\t\t\t1.Sign In"<<endl;
	   line();
	   cout<<"\t\t\t2.Add Employee "<<endl;
	   line();
	   cout<<"\t\t\t3.Forgot Password"<<endl;
	   line();
	   cout<<"\t\t\t4.Back"<<endl;
	    line();
	   cout<<"\t\t\tSelect An Option >>>> ";cin>>choice;
	   switch(choice)
	   {
	   case 1:
		   admin.logi();
		   system("pause");
		   break;

	   case 2 :
		   admin.signp();
		   system("pause");
		   break;
	   case 3:
		   admin.forgotpass();
		   system("pause");
		   break;
       case 4:
		   main();
		   break;
	   default:
		      cout<<"\t\t\t Select An Right Option "<<endl;
		   break;
	   }

   }
	
	system("pause");
	return 0;
}

class cheffFuncationelity:private file,categoryDetail,Person,ItemDetail{
	adminFunctionelity chef;
public:
	void afterSignInfunctionaletyOfCheff()
	{
		system("cls");
		while (true)
		{
			cout<<"\t\t\t 1. See DEAL Orderd Detail "<<endl;
			cout<<"\t\t\t 2. See ITEM orderd Detail "<<endl;
			cout<<"\t\t\t 3. Made Food Status "<<endl;
			cout<<"\t\t\t 4. Made Food Status Update "<<endl;
			cout<<"\t\t\t 5. See Prepared Food Status "<<endl;
			cout<<"\t\t\t 6. BACK "<<endl;
			cout<<"\t\t\t Select An Option : ";cin>>choice;
			switch (choice)
			{
			case 1:
				system("cls");
				displayUserDealOrder();
				system("pause");
				break;
			case 2:
				system("cls");
				displayUserItemOrder();
				system("pause");
				break;
			case 3:
				system("cls");
				preparedOrderdStatus();
				system("pause");
				break;
			case 4:
				system("cls");
				preparedOrderdStatusUpdate();
				system("pause");
				break;
			case 5:
				system("cls");
				SeepreparedOrderdStatus();
				system("pause");
				break;
			case 6:
				system("cls");
				ChefMain();
				break;
			default:
				system("cls");
				cout<<"\t\t\t Select Right Option "<<endl;
				afterSignInfunctionaletyOfCheff();
				break;
			}



		}

	}
void displayUserDealOrder()
	{
	cin.ignore();
		read.open("OrderdDeal.csv",ios::in);
		while(!read.eof())
		{
			getline(read,id,',');
			getline(read,categoryName,',');
			getline(read,quantity,'\n');
			if(id!="")
			{
			  line();
			  cout<<"\t\t\t Customer ID : "<<id<<endl;
			  cout<<"\t\t\t   Deal Name : "<<categoryName<<endl;
			  cout<<"\t\t\t   Quantity  : "<<quantity<<endl;
			 line();
			}
              

		}
		
		read.close();
	}
void displayUserItemOrder()
	{
		cin.ignore();
		read.open("OrderdFood.csv",ios::in);
		while(!read.eof())
		{
			getline(read,id,',');
			getline(read,foodId,',');
			getline(read,quantity,'\n');
			if(id!="")
			{
			  line();
			  cout<<"\t\t\t Customer ID : "<<id<<endl;
			  cout<<"\t\t\t   Food Name : "<<foodId<<endl;
			  cout<<"\t\t\t  Quantity   : "<<quantity<<endl;
			   line();
			}
              
		}
		
		read.close();
	}
void preparedOrderdStatus()
	{
		cin.ignore();
		write.open("OrderdStatus.csv",ios::app);
		cout<<"\t\t\t Enter Customer Id : ";getline(cin,id);
		cout<<"\t\t\t Enter Orderd ID OR Deal Name : ";getline(cin,foodId);
		cout<<"\t\t\t Enter Status Yes OR No : ";getline(cin,status);
		setFoodId(foodId);
		setSatatus(status);
		write<<id<<','<<foodId<<','<<status<<endl;
		write.close();
		cout<<"\t\t\t Customer ID : "<<id<<endl;
		displayStatus();
		cout<<"\t\t\t Added In File Successfully "<<endl;

	}
void preparedOrderdStatusUpdate()
	{
		cin.ignore();
	   read.open("OrderdStatus.csv",ios::in);
	   temp.open("temp.csv",ios::out);
	   cout<<"\t\t\t Enter User ID Do you want Update : ";getline(cin,searchId);
	   setFoodId(searchId);
	   setCheck();
	   while (!read.eof())
	   {
		   int choice;
		   getline(read,id,',');
		   getline(read,foodId,',');
		   getline(read,status,'\n');
		   if (foodId==searchId)
		   {
			  cout<<"\t\t\t What Do You Want Update "<<endl<<"\t\t\t 1.Customer ID "
				  <<endl<<"\t\t\t 2.Food ID OR Deal Name "<<"\t\t\t 3.Status"<<endl;
			  cin>>choice;
			  switch (choice)
			  {
			  case 1:
				  cout<<"Enter Customer ID  : ";getline(cin,id);
				  temp<<id<<','<<foodId<<','<<status<<endl;
				  cout<<"\t\t\t Successfully Update Customer ID : "<<id<<endl;
				  check=true;
				  break;
			  case 2:
				  cout<<"Enter Food ID OR Deal Name : ";getline(cin,foodId);
				  temp<<id<<','<<foodId<<','<<status<<endl;
				  cout<<"\t\t\t Successfully Update Food ID OR Deal Name : "<<foodId<<endl;
				  check=true;
				  break;
			  case 3:
				  cout<<"Enter Status : ";getline(cin,status);
				  temp<<id<<','<<foodId<<','<<status<<endl;
				  cout<<"\t\t\t Successfully Update Status : "<<status<<endl;
				  check=true;
				  break;
			  default:
				  cout<<"\t\t\t Select A Right Option "<<endl;
				  system("cls");
				  preparedOrderdStatusUpdate();
				  break;
			  }

		   }
		   else
		   {
			   temp<<id<<','<<foodId<<','<<status<<endl;
		   }

	   }
	   if (check==false)
	   {
		   cout<<"\t\t\t Sorry Dilla Customer ID did'nt Match "<<endl;
	   }
	   read.close();
	   temp.close();
	   temp.open("temp.csv",ios::in);
	   write.open("OrderdStatus.csv",ios::out);
	   while (!temp.eof())
	   {
		   getline(temp,id,',');
		   getline(temp,foodId,',');
		   getline(temp,status,'\n');
		   if(id!="")
		   {
			   write<<id<<','<<foodId<<','<<status<<endl;
		   }


	   }
	   write.close();
	   temp.close();
	   remove("temp.csv");
	}
void SeepreparedOrderdStatus()
{
	cin.ignore();
	read.open("OrderdStatus.csv",ios::in);
	while (!read.eof())
	{
		getline(read,id,',');
		getline(read,foodId,',');
		getline(read,status,'\n');
		line();
		cout<<"\t\t\t Deal OR Food ID "<<foodId<<endl<<"\t\t\t Status "<<status<<endl;
		line();
	}
}
};
class Cheff:public Person{
public:
	void CheffSignin()
	{
		 bool che;
		   SetConsoleTextAttribute(h,FOREGROUND_GREEN | FOREGROUND_INTENSITY);
		   cin.ignore();
		   cout<<"\t\t\tEnter ID : ";getline(cin,id);
		   cout<<"\t\t\tPassword : ";getline(cin,password);
		   signIn sign(id,password);
		   che=sign.signin();
		   if(che==true)
		   {
			   cheffFuncationelity ch;
			   ch.afterSignInfunctionaletyOfCheff();
		  
		   }
		   else
		   {
			   ChefMain();
		   }
	}
	void CheffForGotPass()
	{
		signIn sign(id);
		sign.forGottonPass();
	}
	
};
int ChefMain()
{
	Cheff chef;
	int choice;
	cout<<"\n\n\n"<<endl;
	SetConsoleTextAttribute(h,FOREGROUND_GREEN | FOREGROUND_INTENSITY);
   while(true)
   {   line();
	   cout<<"\t\t\t1.Sign In"<<endl;
	   line();
	   cout<<"\t\t\t2.Forgot Password"<<endl;
	   line();
	   cout<<"\t\t\t3.Back"<<endl;
	    line();
	   cout<<"\t\t\tSelect An Option >>>> ";cin>>choice;
	   switch(choice)
	   {
	   case 1:
		   chef.CheffSignin();
		   system("pause");
		   break;
	   case 2:
		   chef.CheffForGotPass();
		   system("pause");
		   break;
       case 3:
		   main();
		   break;
	   default:
		      cout<<"\t\t\t Select An Right Option "<<endl;
		   break;
	   }

   }
	
	system("pause");

	return 0;
}
class  DeliveryBoyFunctionelity:public file,categoryDetail,Person,ItemDetail
{
	
public:
	void afterSignInDeliveryBoyFunctionality()
	{
		system("cls");
		while (true)
		{
			cout<<"\t\t\t 1. See Orderd For Delivery "<<endl;
			cout<<"\t\t\t 2. See Customer Detail "<<endl;
			cout<<"\t\t\t 3. BACK "<<endl;
			cout<<"\t\t\t Select An Option : ";cin>>choice;
			switch (choice)
			{
			case 1:
				system("cls");
				seeOrderForDelivery();
				system("pause");
				break;
			case 2:
				system("cls");
				seeCustomerDetail();
				system("pause");
				break;
			case 3:
				system("cls");
				DeliveryBoyMain();
				break;
			default:
				system("cls");
				cout<<"\t\t\t Select A True Options "<<endl;
				afterSignInDeliveryBoyFunctionality();
				break;
			}

		}
	}
	void seeOrderForDelivery()
	{
       cheffFuncationelity see;
	   see.SeepreparedOrderdStatus();
	}
	void seeCustomerDetail()
	{
		 read.open("Customer.csv",ios::in);
		 temp.open("OrderdStatus.csv",ios::in);
		 setCheck();
		 while (!temp.eof())
		 {
		   getline(temp,searchId,',');
		   getline(temp,foodId,',');
		   getline(temp,status,'\n');
		   while (!read.eof())
		   {
			getline(read,id,',');
		    getline(read,password,',');
            getline(read,firstName,',');
		    getline(read,lastName,',');
		    getline(read,phone,',');
		    getline(read,address,'\n');
			if(searchId==id)
			{
				cout<<"\t\t\t Full Name : "<<firstName<<" "<<lastName<<endl;
				cout<<"\t\t\t     Phone : "<<phone<<endl;
				cout<<"\t\t\t   Address : "<<address<<endl;
				check=true;
			}
		   }
		 }
		 read.close();
		 temp.close();
		 if(check==false)
		 {
			 cout<<"\t\t\t Enjoy Jaani No Orderd is Available For Delivery "<<endl;
		 }
	}

};
class DeliveryBoy:public Person
{
	public:
	void DeliveryBoySignin()
	{
		 bool che;
		   SetConsoleTextAttribute(h,FOREGROUND_GREEN | FOREGROUND_INTENSITY);
		   cin.ignore();
		   cout<<"\t\t\tEnter ID : ";getline(cin,id);
		   cout<<"\t\t\tPassword : ";getline(cin,password);
		   signIn sign(id,password);
		   che=sign.signin();
		   if(che==true)
		   {
			   DeliveryBoyFunctionelity db;
			   db.afterSignInDeliveryBoyFunctionality();
		  
		   }
		   else
		   {
			   DeliveryBoyMain();
		   }
	}
	void DelBoyForGotPass()
	{
		signIn sign(id);
		sign.forGottonPass();
	}

};

int DeliveryBoyMain()
{
	DeliveryBoy db;
	int choice;
	cout<<"\n\n\n"<<endl;
	SetConsoleTextAttribute(h,FOREGROUND_GREEN | FOREGROUND_INTENSITY);
   while(true)
   {   line();
	   cout<<"\t\t\t1.Sign In"<<endl;
	   line();
	   cout<<"\t\t\t2.Forgot Password"<<endl;
	   line();
	   cout<<"\t\t\t3.Back"<<endl;
	    line();
	   cout<<"\t\t\tSelect An Option >>>> ";cin>>choice;
	   switch(choice)
	   {
	   case 1:
		   db.DeliveryBoySignin();
		   system("pause");
		   break;
	   case 2:
		   db.DelBoyForGotPass();
		   system("pause");
		   break;
       case 3:
		   main();
		   break;
	   default:
		      cout<<"\t\t\t Select An Right Option "<<endl;
		   break;
	   }

   }
	
	system("pause");

	return 0;
}
class AccountantFunctionalety:public file{
	void checkDeliveryStatus()
	{

	}
	void seeBill()
	{

	}
};
class Accountant:public signIn {
public:
	void AccountantSignin()
	{
		signin();
	}
	void AccountantForGotPass()
	{
		forGottonPass();
	}
};
int AccountantMain()
{
	return 0;
}
class UsersignUp:private Person,file
{
    public:
	UsersignUp():Person()
	{
		
	}
	UsersignUp(string idd,string fn,string ln,string add,string ph,string pass):Person(idd,ln,fn,ph,add,pass)
	{
		
	}
  void UserSignup()
  {    
	  bool flag=false;
	  write.open("Customer.csv",ios::app);
	  read.open("Customer.csv",ios::in);
	  while (!read.eof())
	  {
		getline(read,searchId,',');
		getline(read,searchPass,',');
		getline(read,searchFName,',');
		getline(read,searchLName,',');
		getline(read,searchPhone,',');
		getline(read,searchAdd,'\n');
		if(id==searchId)
		{
			cout<<"\t\t\t Sorry Jaani ID Already Excist "<<endl;
			flag=true;
			break;
			
			
		}
	  }
	  read.close();
	  if(flag==false)
	  {
       write<<id<<','<<password<<','<<firstName<<','<<lastName<<','<<phone<<','<<address<<endl;
	   dislay();
	  }
	  
	  write.close();
	  
  }

};
class UsersignIn:private Person,file{
	 public:
	UsersignIn():file()
	{
		
	}
	UsersignIn(string idd,string pass)
	{
		searchId=idd;
		searchPass=pass;
	}
	UsersignIn(string idd)
	{
		searchId=idd;
		
	}
bool UserSignin()
  {
	  read.open("Customer.csv",ios::in);
	while(!read.eof())
    { 
		getline(read,id,',');
		getline(read,password,',');
        getline(read,firstName,',');
		getline(read,lastName,',');
		getline(read,phone,',');
		getline(read,address,'\n');
		if(id==searchId && password==searchPass)
        {
			return true;
			check=true;
            break;
        }
	
    }
		if(check==false)
    {
		   cout<<"\t\t\t Wrong Password OR Id"<<endl;
		   return false;
 
		
    }
    read.close();
	
}
  
 void UserforGottonPass()
  {
	 read.open("Customer.csv",ios::in);
	while(!read.eof())
    { 
		getline(read,id,',');
		getline(read,password,',');
        getline(read,firstName,',');
		getline(read,lastName,',');
		getline(read,phone,',');
		getline(read,address,'\n');
		if(id==searchId)
        {
	        cout<<"\t\t\tID : "<<id<<endl;
			cout<<"\t\t\tPassword: "<<password<<endl;
			check=true;
            break;
        }
	
    }
		if(check==false)
    {
        cout<<" \t\t\n ID did'nt Match \n";
		
    }
    read.close();
}
  

};

class ShowFood:private categoryDetail,file,ItemDetail{
	public:
	 void ShowDeals()
	{
		read.open("Category.csv",ios::in);
		while(!read.eof())
		{
		    getline(read,categoryName,',');
			setCategoryName(categoryName);
			getline(read,food1,',');
			setFood1(food1);
			getline(read,food2,',');
			setFood2(food2);
			getline(read,food3,',');
			setFood3(food3);
			getline(read,drink,',');
			setDrink(drink);
			getline(read,price,'\n');
			setPrice(price);
			if(categoryName != "")
			{
				line();
			  DisplayCategoryRes();
			    line();
			}
			}
		
		read.close();
		
	}
	  void ShowRandomFood()
	{
		read.open("food.csv",ios::in);
		while(!read.eof())
		{
			getline(read,foodId,',');
			setFoodId(foodId);
			getline(read,foodName,',');
			setFoodName(foodName);
			getline(read,foodPrice,',');
			setPrice(foodPrice);
			getline(read,foodDescription,'\n');
			setDescription(foodDescription);
			if(foodId != "")
			{
		    line();
			displayFoodRes();
			line();
			}
			}
		
		read.close();
		
	}
};
class userFunctionalety:private categoryDetail, Person, file,ItemDetail{
	ShowFood deal;
public:
	void afterLoginUserFunctionality()
	{
		system("cls");
		while (true)
		{
			 line();
			 cout<<"\t\t\t1.Show Deals"<<endl;
			 line();
			 cout<<"\t\t\t2.Show Items"<<endl;
			 line();
	         cout<<"\t\t\t3.Give DEAL Order"<<endl;
	         line();
	         cout<<"\t\t\t4.Delete DEAL Order"<<endl;
	        line();
	        cout<<"\t\t\t5.Give ITEM Order"<<endl;
	         line();
			  cout<<"\t\t\t6.Delete ITEM Order"<<endl;
	         line();
	         cout<<"\t\t\t7.View Your DEAL Order"<<endl;
	         line();
	        cout<<"\t\t\t8.View Your ITEM Order"<<endl;
	         line();
	        cout<<"\t\t\t9.See Your Bill"<<endl;
	        line();
			cout<<"\t\t\t10.Have You Gotton Your Order "<<endl;
			line();
			cout<<"\t\t\t11.Back"<<endl;
			line();
	       cout<<"\t\t\tSelect An Option >>>> ";cin>>choice;
		   switch (choice)
		   {
		   case 1:
			   system("cls");
			   deal.ShowDeals();
			   system("pause");
			   system("cls");
			   break;
		   case 2:
			   system("cls");
			   deal.ShowRandomFood();
			   system("pause");
			   system("cls");
			   break;
		   case 3:
			   system("cls");
			   giveOrderedDeal();
			   break;
		   case 4:
			   system("cls");
			   DelDeal();
			   break;
		   case 5:
			   system("cls");
			    giveOrdereItem();
			   break;
		   case 6:
			   system("cls");
			   removeItemInCurrentOrdered();
			   break;
		   case 7:
			   system("cls");
			   viewDealOrederedDetailed();
			   system("pause");
			   break;
		   case 8:
			   system("cls");
			   viewItemOrederedDetailed();
			   system("pause");
			   break;
		   case 9:
			   system("cls");
			   showBill();
			   system("pause");
			   system("cls");

			   break;
		   case 10:
			   system("cls");
			   doneStatus();
			   system("pause");
			   system("cls");
			   break;
		   case 11:
			   system("cls");
			   UserMain(); 
			   break;
		   default:
			   cout<<"\t\t\t Please Select A Right Option : "<<endl;
			   system("pause");
			   system("cls");
			   break;
		   }

		}
	}
void giveOrderedDeal()
	{
		cin.ignore();
		write.open("OrderdDeal.csv",ios::app);
		cout<<"\t\t\t  Enter Your ID : ";getline(cin,id);
		cout<<"\t\t\t      Deal Name : ";getline(cin,categoryName);
		cout<<"\t\t\t       Quantity : ";getline(cin,quantity);
		write<<id<<','<<categoryName<<','<<quantity<<endl;
		write.close();
		cout<<"\t\t\t Deal     : "<<categoryName<<endl;
		cout<<"\t\t\t Quantity : "<<quantity<<endl;
		cout<<"\t\t\t Has Successfully Orederd "<<endl;
	}
void DelDeal()
	{
		cin.ignore();
		read.open("OrderdDeal.csv",ios::in);
		temp.open("temp.csv",ios::out);
		setCheck();
		cout<<"\t\t\t Deal Name Do You Want Delete : ";getline(cin,searchCategory);
		setCategoryName(searchCategory);
		while(!read.eof())
		{
			getline(read,id,',');
			getline(read,categoryName,',');
			getline(read,quantity,'\n');
			if(searchCategory==categoryName)
			{
				id="";
				categoryName="";
				quantity="";
				check=true;
				cout<<"\t\t\t  Deleted Deal :"<<categoryName<<endl;
				
				

			}
			else
			{
				temp<<id<<','<<categoryName<<','<<quantity<<endl;
			}
		}

		if(check==false)
		{
			cout<<"Deal Name Did'nt Match : "<<searchCategory<<endl;
		}
		read.close();
		temp.close();
		temp.open("temp.csv",ios::in);
		write.open("OrderdDeal.csv",ios::out);
		while(!temp.eof())
		{
			getline(temp,id,',');
			getline(temp,categoryName,',');
			getline(temp,quantity,'\n');
			if(id!="")
			{
				write<<id<<','<<categoryName<<','<<quantity<<endl;
			}
		}
		write.close();
		temp.close();
		remove("temp.csv");

	}
void giveOrdereItem()
	{
		cin.ignore();
		write.open("OrderdFood.csv",ios::app);
		cout<<"\t\t\t  Enter Your ID : ";getline(cin,id);
		cout<<"\t\t\t  Enter Food Id : ";getline(cin,foodId);
		cout<<"\t\t\t       Quantity : ";getline(cin,quantity);
		write<<id<<','<<foodId<<','<<quantity<<endl;
		write.close();
		cout<<"\t\t\t Food  Id : "<<foodId<<endl
			<<"\t\t\t Quantity : "<<quantity<<endl
			<<"\t\t\t Has Orederd Successfully "<<endl;
	
	}
void removeItemInCurrentOrdered()
	{
		cin.ignore();
		read.open("OrderdFood.csv",ios::in);
		temp.open("temp.csv",ios::out);
		setCheck();
		cout<<"\t\t\t Enter Food Id Do You Want Delete : ";getline(cin,searchCategory);
		setFoodId(searchCategory);
		while(!read.eof())
		{
			getline(read,id,',');
			getline(read,foodId,',');
			getline(read,quantity,'\n');
			if(searchCategory==foodId)
			{
				
				id="";
				foodId="";
				quantity="";
				cout<<"\t\t\t  Deleted Deal"<<getFoodId()<<endl;;
				check=true;

			}
			else
			{
				temp<<id<<','<<foodId<<','<<quantity<<endl;
			}
		}

		if(check==false)
		{
			cout<<"\t\t\t Food ID Did'nt Match "<<getFoodId()<<endl;
		}
		read.close();
		temp.close();
		temp.open("temp.csv",ios::in);
		write.open("OrderdFood.csv",ios::out);
		while(!temp.eof())
		{
			getline(temp,id,',');
			getline(temp,foodId,',');
			getline(temp,quantity,'\n');
			if(id!="")
			{
				write<<id<<','<<foodId<<','<<quantity<<endl;
			}
		}
		write.close();
		temp.close();
		remove("temp.csv");
	
	}
void viewDealOrederedDetailed()
	{
		cin.ignore();
		read.open("OrderdDeal.csv",ios::in);
		cout<<"Enter Your Id : ";getline(cin,searchId);
		setId(searchId);
		setCheck();
		while(!read.eof())
		{
			getline(read,id,',');
			getline(read,categoryName,',');
			getline(read,quantity,'\n');
			if(id==searchId)
			{
              line();
			 cout<<"\t\t\t Deal Name : "<<categoryName<<endl;
			 cout<<"\t\t\t Quantity  : "<<quantity<<endl;
			 line();
			 check=true;
			}
			
		}
		if(check==false)
		{
			cout<<"\t\t\tYou Did'nt Place any Deal Orederd "<<getId()<<endl;
		}
		read.close();
	}
void viewItemOrederedDetailed()
	{
		cin.ignore();
		read.open("OrderdFood.csv",ios::in);
		cout<<"Enter Your Id : ";getline(cin,searchId);
		setId(searchId);
		setCheck();
		while(!read.eof())
		{
			getline(read,id,',');
			getline(read,foodId,',');
			getline(read,quantity,'\n');
			if(id==searchId)
			{
              line();
			  cout<<"\t\t\t Food Name : "<<foodId<<endl;
			 cout<<"\t\t\t  Quantity  : "<<quantity<<endl;
			 line();
			 check=true;
			}
			
		}
		if(check==false)
		{
			cout<<"\t\t\t You Did'nt Place Item Orederd "<<endl;
		}
		read.close();
	}
void doneStatus()
{
	cin.ignore();
	write.open("Done.csv",ios::app);
	cout<<"\t\t\t Did you get Your Order : ";getline(cin,status);
	write<<getId()<<','<<status<<endl;
	write.close();
}
void showBill()
{
	string dealPrice[20]={"0"},dealQty[20]={"0"},itemPrice[20]={"0"},itemQty[20]={"0"};
	int DPrice[20]={0},DQty[20]={0},IPrice[20]={0},IQty[20]={0};
	int i=0,j=0;
	write.open("Category.csv",ios::in);
	temp2.open("OrderdDeal.csv",ios::in);
		while (!temp2.eof())
	         {
				getline(temp2,id,',');
				getline(temp2,searchCategory,',');
			    getline(temp2,quantity,'\n');
		while (!write.eof())
	              {
		       getline(write,categoryName,',');
			   getline(write,food1,',');
			   getline(write,food2,',');
			   getline(write,food3,',');
			   getline(write,drink,',');
			   getline(write,price,'\n');
				if (categoryName==searchCategory)
				{
					line();
					cout<<"\t\t\t Deal Name : "<<categoryName<<endl;
					cout<<"\t\t\t    Item 1 : "<<food1<<endl;
					cout<<"\t\t\t    Item 2 : "<<food2<<endl;
					cout<<"\t\t\t    Item 3 : "<<food3<<endl;
					cout<<"\t\t\t     Drink : "<<drink<<endl;
					cout<<"\t\t\t     Price : "<<price<<endl;
					cout<<"\t\t\t  Quantity : "<<quantity<<endl;
					line();
					dealPrice[i]=price;
					dealQty[i]=quantity;
					i++;
				}
	                 }
	}
	write.close();
	temp2.close();
	read.open("food.csv",ios::in);
	temp.open("OrderdFood.csv",ios::in);
	while (!temp.eof())
	         {
				 getline(temp,id,',');
				 getline(temp,searchId,',');
			     getline(temp,quantity,'\n');
	while (!read.eof())
	      {
		        getline(read,foodId,',');
			    getline(read,foodName,',');
			    getline(read,foodPrice,',');
			    getline(read,foodDescription,'\n');
				  if(searchId==foodId)
				  {
					  line();
					  cout<<"\t\t\t   Food ID : "<<foodId<<endl;
					  cout<<"\t\t\t Food Name : "<<foodName<<endl;
					  cout<<"\t\t\t     Price : "<<foodPrice<<endl;
					  cout<<"\t\t\t  Quantity : "<<quantity<<endl;
					  line();
					  itemPrice[j]=foodPrice;
					  itemQty[j]=quantity;
					  j++;
				  }
	               }
	}
	read.close();
	temp.close();
	
	for(int i=0;i<=19;i++)
	{
		DPrice[i]=std::atoi(dealPrice[i].c_str());
		DQty[i]=std::atoi(dealQty[i].c_str());
		IPrice[i]=std::atoi(itemPrice[i].c_str());
		IQty[i]=std::atoi(itemQty[i].c_str());
	}

	int SumDeal=0;
	int SumItem=0;
	for (int i = 0; i <=9; i++)
	{
		SumDeal=SumDeal+(DPrice[i]*DQty[i]);
		SumItem=SumItem+(IPrice[i]*IQty[i]);
	}
	cout<<"\t\t\t You Have To Paid "<<SumDeal<<" For Deal Items "<<endl;
	cout<<"\t\t\t You Have To Paid "<<SumItem<<" For Food Items "<<endl;
}
};
class Customer:private file,Person{
public:
 void Usersignp()
 {     cin.ignore();
		   cout<<"\t\t\tEnter ID : ";getline(cin,id);
		   cout<<"\t\t\tFirst Name : ";getline(cin,firstName);
		   cout<<"\t\t\tLast Name : ";getline(cin,lastName);
		   cout<<"\t\t\tPhone : ";getline(cin,phone);
		   cout<<"\t\t\tAddress : ";getline(cin,address);
		   cout<<"\t\t\tPassword : ";getline(cin,password);
		   UsersignUp Usersign(id,firstName,lastName,address,phone,password);
	      Usersign.UserSignup();
	   }
void Userlogi()
	   {
		   cin.ignore();
		   bool che;
		   cout<<"\t\t\tEnter ID : ";getline(cin,id);
		   cout<<"\t\t\tPassword : ";getline(cin,password);
	      UsersignIn Usersign(id,password);
		   che=Usersign.UserSignin();
		   if(che==true)
		   {
		  
			   userFunctionalety uf;
			   uf.afterLoginUserFunctionality();
		  
		   }
		   else
		   {
			 UserMain();
		   }


	   }
 void UserforgotPass(){
	         
	           cout<<"\t\t\tFORGOTTON PASSWORD Y?N : ";
			   cin>>Schoice;
			   if(Schoice=="y" ||Schoice == "Y")
			   {
				   cout<<"\t\t\t Enter Your ID : ";cin>>searchId;
				   UsersignIn Userforpass(searchId);
				   Userforpass.UserforGottonPass();
				   
			   }
			   else
			   {
				   UserMain();
			   }
	   }
   


};
int UserMain()
{

	int choice;
	Customer customer;
	cout<<"\n\n\n"<<endl;
   while(true)
   {   line();
	   cout<<"\t\t\t1.Sign In"<<endl;
	   line();
	   cout<<"\t\t\t2.Sign Up"<<endl;
	   line();
	   cout<<"\t\t\t3.Forgot Password"<<endl;
	   line();
	   cout<<"\t\t\t4.Back"<<endl;
	    line();
	   cout<<"\t\t\tSelect An Option >>>> ";cin>>choice;
	   switch(choice)
	   {
	   case 1:
		   system("cls");
		   customer.Userlogi();
		   system("pause");
		   break;

	   case 2 :
		    system("cls");
		   customer.Usersignp();
		   system("pause");
		   break;
	   case 3:
		    system("cls");
		   customer.UserforgotPass();
		   system("pause");
		   break;
       case 4:
		   main();
		   break;
	   default:
		      cout<<"\t\t\t Select An Right Option "<<endl;
		   break;
	   }

   }
	
	system("pause");
	return 0;
}
