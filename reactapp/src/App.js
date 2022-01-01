import './mystyle.css'
function App() {
  return (
    <>
    <form>
      <input type="text" id="fname" name="code" placeholder="Code"></input>
      <input type="text" id="fname" name="name" placeholder="Full Name"></input>
      <input type="text" id="fname" name="age" placeholder="Age"></input>
      <select id="country" name="country">
      <option value="Bashundhara">Bashundhara</option>
      <option value="Gulshan">Gulshan</option>
      <option value="Banani">Banani</option>
      </select>
      <button class="button button4">ADD</button>
    </form>
    </>
  );
  }

export default App;
