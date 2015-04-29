local lapis = require("lapis")
local app = lapis.Application()

app:enable("etlua")
app.layout = require "views.layout"

app:get("index", "/", function(self)
  self.page_title = "All notes"
  return { render = "index" }
end)

app:get("signup", "/signup", function(self)
  self.page_title = "Sign Up"
  return { render = true }
end)

return app
