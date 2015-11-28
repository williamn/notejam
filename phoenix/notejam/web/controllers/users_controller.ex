defmodule Notejam.UsersController do
  use Notejam.Web, :controller

  def new(conn, _params) do
    logged_in = get_session(conn, :logged_in)
    render conn, "new.html", title: "Sign Up", logged_in: logged_in
  end
end