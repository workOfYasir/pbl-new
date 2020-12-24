#include <iostream>
using namespace std;
 

class std_basic_info
{
    private:
        char name[30];
        int  age;
        char gender;
    public:
        void getBasicInfo(void);
        void putBasicInfo(void);
};
 

void std_basic_info::getBasicInfo(void)
{
    cout << "Enter student information:" << endl;
    cout << "Name: ";    cin >> name;
    cout << "Age: ";     cin >> age;
    cout << "Gender: ";  cin >> gender;
}
 
void std_basic_info::putBasicInfo(void)
{

}
class std_result_info:public std_basic_info
{
    private:
        int     TotalM;
        float   percentage;
        char    Grade;
    public:
        void getResultInfo(void);
        void putResultInfo(void);
};
 

void std_result_info::getResultInfo(void)
{
    cout << "Enter student's result information:" << endl;
    cout << "Total Marks?: ";     cin >> TotalM;
    percentage= (float)((TotalM*100)/500);
    cout << "Grade?: ";cin >> Grade;
}
 
void std_result_info::putResultInfo(void)
{
    cout << "Total Marks: " << TotalM << ",Percentage: " << percentage << ",Grade: " << Grade << endl;
}
 
int main()
{
    
    std_result_info std;
 
  
    std.getBasicInfo();
    std.getResultInfo();
 
    
    std.putBasicInfo();
    std.putResultInfo();
     
    return 0;
}
